<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //Register
    public function register(RegisterRequest $request){
        $validated = $request->validated();
        User::create([
            'email'=>$validated['email'],
            'password'=>Hash::make($validated['password'])
        ]);
        return to_route('page@loginPage')->with('success','Successfully registered');
    }
    //Login
    public function login(Request $request){
         $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $user=User::where('email',$request->email)->first();
        if (! Hash::check($request->password,$user->password)) {
            return back()->with('err','Please enter valid password');
        }
        session()->put('user_id',$user->id);
        session()->put('login',true);
        return to_route('page@home')->with('success','login process success');
    }
    //logout
    public function logout(){
        session()->forget([
            'user_id','login'
        ]);
        return to_route('page@loginPage');
    }
}
