<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('homepage');
    }
}

// CONTROLLER SIMPLE
// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class HomeController extends Controller
// {
//     public function index()
//     {
//         return ('welcome');
//     }
// }
