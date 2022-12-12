<?php

namespace App\Http\Controllers;

use App\Models\Otp;
use App\Mail\OtpSend;
use App\Mail\RegisterOtp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OtpController extends Controller
{
    //sendOtp
    public function sendOtp(Request $request){
        $code = rand(10000,99999);
        Otp::create([
            'email'=>$request->email,
            'code'=>$code
        ]);
        Mail::to($request->email)->send(new OtpSend($code));
        return to_route('page@verifyOtp',$request->email);
    }

    //verifyOtp
    public function verifyOtp(Request $request){
        $data = Otp::where('email',$request->email)->orderBy('id','desc')->first();
        if ($data->code<>$request->code) {
            return back()->with('err','Please enter valid code');
        }
        Otp::where('email',$data->email)->delete();
        return view('Pages.register',['email'=>$data->email]);

    }

}
