<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('front.index');
    }
    function aboutUs(){
        return view('front.aboutus');
    }
    function serviceDetails(){
        return view('front.servicedetails');
    }
}
