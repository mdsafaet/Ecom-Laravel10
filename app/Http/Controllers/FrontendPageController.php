<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendPageController extends Controller
{
    public function Home() {
        return view('frontend.page.index');
    }


    public function Contact() {
        return view('frontend.page.contact');
    }

    public function Login () {
        return view('frontend.page.login');
    }
    
    public function Registration()  {
        return view('frontend.page.registration');
    }

    public function ForgetPass() {
        return view('frontend.page.forget-pass');
    }
}
