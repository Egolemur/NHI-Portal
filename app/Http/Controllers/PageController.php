<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('/home');
    }

    public function elementary()
    {
        return view('/elementary');
    }

    public function kindergarten()
    {
        return view('/kindergarten');
    }

    public function about()
    {
        return view('/about');
    }

    public function enrollment()
    {
        return view('/enrollment');
    }
    
    public function login()
    {
        return view('auth.login');
    }
}
