<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MidController extends Controller
{
    function MidAction():string
    {
        return "Hello";
    }

    function MidAction2():string
    {
        return "Hello2";
    }
    
    
    function MidAction3():string
    {
        return "Hello3";

    }


    function MidAction4():string
    {
        return "Hello4";
    }


    function DimAction(Request $request):array
    {
        return $request->header();
    }


    function lateLimiting(Request $request):string
    {
        return "Hello, World";
    }
  

}
