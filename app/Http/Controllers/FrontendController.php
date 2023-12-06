<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function aboutus(){
        return view('frontend.menu.aboutus');
    }
    public function misionvision(){
        return view('frontend.menu.misionvision');
    }
    public function productservices(){
        return view('frontend.menu.prodandservices');
    }
    public function blog(){
        return view('frontend.menu.blogs');
    }
    public function contactus(){
        return view('frontend.menu.contact');
    }
}
