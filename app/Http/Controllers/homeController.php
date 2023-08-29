<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
    // home page show
    function index ()
    {
        return view('home');
    }

    // admin page show
    function redirects ()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin/adminhome');
        } else {
            return view("home");
        }

    }
}
