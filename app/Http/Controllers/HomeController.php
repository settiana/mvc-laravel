<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function welcome(Request $request)
    {
        return view('welcome', ['first_name' => $request->first_name,'last_name' => $request->last_name]);
    }
}
