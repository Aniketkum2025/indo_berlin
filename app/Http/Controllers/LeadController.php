<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CRMBlockList;
use App\Models\LeadQueue;
use App\Models\Thankyouemail;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class LeadController extends Controller
{
    
    public function store(Request $request)
    {  
        $request->validate([
        'sendto' => 'required|numeric',
        'email' => 'required|email'],
        ['sendto.required' => 'The contact no must be required.','sendto.numeric' => 'The contact no must be in numeric.']);
      
        $member_id = 0;
      
        $crm_course_id = $request->crm_course_id;
        if(!$request->crm_course_id || $request->crm_course_id==""){
            if($request->lead_source_page_url){
                $url = explode( '?',$request->lead_source_page_url);
                $path = parse_url($url[0], PHP_URL_PATH);
                $segments = explode('/', rtrim($path, '/'));
                $course_slug = end($segments);
                $res = Course::select('crm_course_id')->whereRaw("slug LIKE '%$course_slug%'")->first(); 
                if($res){
                    $crm_course_id = $res->crm_course_id;
                }
            }
        }
        $name = $request->name;
        $slug = $request->slug; 
        $course = Course::where('slug','=',$slug)->first();
        if($course){
            $crm_course_id = $course->crm_course_id;
        }
        $course_name=($request->course_name);
        $countryCode=($request->countryCode);
        $phone=($request->sendto);
        $email=($request->email); 
        $source=($request->source);
        $lead_source_page_url = $request->lead_source_page_url;
        $course = $crm_course_id;
        $description=($request->description2);
        $campaign_name=($request->campaign_name);
        $gclid_field=($request->gclid_field);
        $profession=($request->profession);
        $location=($request->location);
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])){
          $ip_address = $_SERVER['HTTP_CF_CONNECTING_IP'];
        }else{
          $ip_address = $_SERVER['REMOTE_ADDR'];
        }
        $dep_type = $request->dep_type;

        $values = array('countryCode' => $countryCode ,'phone' => $phone, 'email' => $email, 'course' => $course, 'source' => $source, 'lead_source_page_url' => $lead_source_page_url, 'description2' => $description, 'name' => $name, 'campaign_name' => $campaign_name, 'gclid_field' => $gclid_field, 'profession' => $profession, 'ip_address' => $ip_address, 'location' => $location, 'dep_type' => $dep_type,'member_id'=>$member_id);

        $lead = Http::get('https://crm.henryharvin.com/portal-new/api/website-check-lead', [
            'email' => $email
        ])->object();

        if ($lead->status == 'false'){
            $lead = Http::post('https://crm.henryharvin.com/portal-new/api/website-add-lead', $values)->object();
          
          $val = array('email' => $email, 'brochure' => URL::to('/').'/thank-you/'.$slug, 'course_name' => $course_name, 'status' => 0);

          if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $email = Thankyouemail::create($val);
          }
        }
        $lid = $lead ? base64_encode($lead->data->id) : 0;
        return redirect()->route('get.slug', ['slug'=>$request['slug'], 'lid' => $lid]); 
    } 
}
