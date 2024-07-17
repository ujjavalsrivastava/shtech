<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    function index(){
        return view('front.index');
    }
    function aboutUs(){
        return view('front.aboutus');
    }

    function login(){
        return view('login');   
    }
    function serviceDetails($category , $subcategory){
        return view('front.servicedetails');
    }
}
