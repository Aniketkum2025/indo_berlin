<?php

namespace App\Http\Controllers;

use App\Mail\AppAccDelete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class AccountDeleteController extends Controller
{
   public function index(){
    return view('app_account_delete');
   }
    public function otpVerify(Request $request) {
        try {
            $otp = random_int(100000, 999999);
            session(['otp-fluent' => $otp]);
            
            Mail::to($request->email)->send(new AppAccDelete($otp,  $request->email));

            return response()->json([
                'status' => true,
                'message' => 'OTP has been sent to your email address.',
                // 'otp' => $otp 
            ]);
        }
        catch (\Exception $e) {
            Log::error('OTP sending failed: ' . $e->getMessage());
            return response()->json([
                'status' => false,
                'message' => 'Something went wrong.',
                // 'error' => $e->getMessage()
            ]);
        }
        
        if($is_mail){
            return response()->json(['status' => true, 'otp' => $otp]);
        }else{
            return response()->json(['status' => false]);
        }
    }

    public function store(Request $request) {
        
        if(session()->get('otp-fluent') == $request->otp){
            session()->forget('otp-fluent');
            DB::table('app_account_delete')->insert([
                'email' => $request->email,
                'remark' => $request->remark,
                'delete_app' => 'kazumi',
                'created_at' => now(),
                'updated_at' => now()
            ]);


            return response()->json(['status' => true]);
        }else{
            return response()->json(['status' => false]);
        }
    }

}
