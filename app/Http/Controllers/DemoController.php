<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class DemoController extends Controller
{

    //  Json Response Practice
    
    function Demo1():JsonResponse    
    {
        $city =["Dhaka", "Rangpur", "Rajshahi"];

        $assoc= array(['name'=>'Shaharair', 'age'=>23, 'city'=>'Rangpur'] , ['name'=>'Liza Moni', 'age'=>23, 'city'=>'Dhaka']);

        return response()->json($assoc);
    }


    //  Binary file Response********


    function Demo2():BinaryFileResponse
    {
        $path = 'laravel.png';
        return response()->file($path);
    }


    //  Binary File Downlaod*******

    function Demo3():BinaryFileResponse
    {
        $path = 'laravel.png';
        return response()->download($path);
    }


    //  Response Cookie *******

    function Demo4()
    {
        $name = 'ostad';
        $value = 'ostad-123';
        $expTime = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = true;
        $httpOnly = true;

        return response("Cookie Set Success")->cookie(
            $name, $value, $expTime, $path, $domain, $secure, $httpOnly
        );
    }

    function Demo5()
    {
        return response("Header Set Success")
            
        ->header("ostad1","ostad1-value")
        ->header("ostad2","ostad2-value")
        ->header("ostad3","ostad3-value");
    }


    function DemoAction(Request $request):int
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $sum = $num1 + $num2;

       Log::alert($sum);


        return $sum ;
    }


    //  Session Put,Pull,Get,Forget,Flash Method Use and undesatand**************


    function DemoPut(Request $request):bool
    {
        $email = $request->email;

         $request->session()->put('userEmail', $email);

         return true ;
    }


    function SessionPull(Request $request):string
    {
        return $request->session()->pull('userEmail' , default:'default');
    }

    function DemoGet(Request $request):string
    {
        return $request->session()->get('userEmail' , default:'default');
    }

    function DemoForget(Request $request):bool
    {
         $request->session()->get('userEmail');
         return true;
    }


    function DemoFlush(Request $request):bool
    {
         $request->session()->flush();

         return true;
    }
}
