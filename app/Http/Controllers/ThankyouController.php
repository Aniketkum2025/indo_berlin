<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use App\Models\Course;
use Illuminate\Http\Request;

class ThankyouController extends Controller
{
    public function index($slug)
    {
        $allcourse = Course::orderBy('course_name', 'ASC')->get();
        $course = Academy::where('academy_url',$slug)->first();
        if(!$course)
        {
            $course = Course::with('courseBrochure')->where('slug','=',$slug)->first();
            if(!$course){
            return redirect('/',301);
        }
        }
 
        return view('thankyou',compact('course','allcourse'))
        ->with('i');
    }
}
