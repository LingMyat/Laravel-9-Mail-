<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //loginPage
    public function loginPage(){
        return view('Pages.login');
    }

    //sentOtp
    public function sentOtp(){
        return view('Pages.sentOtp');
    }
    //verifyOtp
    public function verifyOtp(){
        return view('Pages.verifyOtp');
    }
    //registerPage
    public function registerPage(){
        return view('Pages.register');
    }
    //home
    public function home(){
        return view('Pages.home');
    }
}

