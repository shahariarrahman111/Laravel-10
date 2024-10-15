<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleController extends Controller
{
    
    function Hi(Request $request)
    {
        return "Hi, ";
    }

    function Hello(Request $request)
    {
        return "Hello, World. ";
    }
}
