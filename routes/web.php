<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\MidController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SimpleController;
use App\Http\Middleware\HeaderMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo1', [DemoController::class, "demo1"]);

Route::get("/demo2", [DemoController::class,"demo2"]);

Route::get("/demo3", [DemoController::class,"demo3"]);

Route::get("/demo4", [DemoController::class,"demo4"]);

Route::get("/demo5", [DemoController::class,"demo5"]);


/*  Practiceing Middleware
*
** This Middleware Is Verey Important For Authintication & Security Perpus..
*
*/


// This is the way to make middleware group******

/*Route::middleware(["Here we type middleware name t"])->group(function () {

    
});

*/


Route::middleware(["simple"])->group(function () {
    Route::get("/hi", [SimpleController::class,"Hi"]);
    Route::get("/hello", [SimpleController::class,"Hello"]);

    
});


// Log info Practice to Monetoring My Application*****


Route::get("/demo/{num1}/{num2}", [DemoController::class,"DemoAction"]);


// Session Put,Pull,Forget,Flush,Get Route********

Route::get("/sessionPut/{email}", [DemoController::class,"DemoPut"]);
Route::get("/SessionPull", [DemoController::class,"SessionPull"]);
Route::get("/SessionGet", [DemoController::class,"DemoGet"]);
Route::get("/sessionForget", [DemoController::class,"DemoForget"]);
Route::get("/SessionFlush", [DemoController::class,"DemoFlush"]);


// Middleware  Manipulate header er add, repalce, remove* **

Route::get("/getting", [MidController::class,"DimAction"])
->middleware([HeaderMiddleware::class]);

// Middleware for late Limiting and it's called throttel**************

Route::get("/limit/master", [MidController::class,"lateLimiting"])->middleware('throttle:5,1');


/* Middleware practice************
\
\
\
 \* Middleware Group Practice also*******
\
\
\**Single Middleawre and akhane kernel e register kora lage na*****

\**** Route::get("/hhi", [MidController::class,"MidAction"])->middleware([CheckingMiddleware::class]);
*/

Route::middleware(["check"])->group(function(){

    Route::get("/hhi/{key}", [MidController::class,"MidAction"]);
    Route::get("/hhi2/{key}", [MidController::class,"MidAction2"]);
    Route::get("/hhi3/{key}", [MidController::class,"MidAction3"]);
    Route::get("/hhi4/{key}", [MidController::class,"MidAction4"]);
});


/* Blade Engine Prctice*************
/
\*** Here to component, layout and other raw php use and if,elseif,looping****
/
*/

Route::get("/forntend", [ProjectController::class,"index"]);

