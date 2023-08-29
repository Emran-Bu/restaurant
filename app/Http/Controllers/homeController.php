<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    // home page show
    function index ()
    {
        return view('home');
    }
}
