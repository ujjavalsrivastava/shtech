<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class HomeController extends Controller
{
    function index(){
        // dd(Auth::user());
        return view('front.index');
    }
    function aboutUs(){
        return view('front.aboutus');
    }

    function showlogin(){
        return view('login');   
    }

    function login(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/');
        }

        return redirect('/login')->withErrors('Login details are not valid');
    }

    function serviceDetails($category , $subcategory){
        return view('front.servicedetails');
    }
}
