<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Food;
use App\Models\Chef;

class homeController extends Controller
{
    // home page show
    public function index ()
    {
        $data = Food::all();
        $data2 = Chef::all();
        return view('home', compact("data", "data2"));
    }

    // admin page show
    public function redirects ()
    {
        $data = Food::all();
        $data2 = Chef::all();
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin/adminhome');
        } else {
            return view('home', compact("data", "data2"));
        }

    }
}
