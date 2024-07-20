<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
<<<<<<< HEAD
use Auth;
=======
use App\Models\ServiceDetails;
>>>>>>> 2a8687299fafb2735482ae5201b4e08db646bce9

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

        $details =  ServiceDetails::first();

        return view('front.servicedetails',compact('details'));
    }
}
