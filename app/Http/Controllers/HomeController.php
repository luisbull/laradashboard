<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() // __invoke admin ONLY one route
    {
        return view('home');
    }


    ////////////////////////////////////
    // DELETE after learning TAILWIND //
    ////////////////////////////////////
    public function welcome() // __invoke admin ONLY one route
    {
        return view('welcome');
    }

    public function home2()
    {
        return view('home2');
    }
    public function tailwind()
    {
        return view('tailwind');
    }
    ////////////////////////////////////////
    // END DELETE after learning TAILWIND //
    ////////////////////////////////////////
}
