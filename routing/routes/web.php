<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
All the application routes are registered within the app/routes.php file. 
This file tells Laravel for the URIs it should respond to and the associated controller 
will give it a particular call.
{
    Route::get ('/', function () {
   return view('welcome');});
}
-----
|
*/

Route::get('/', function () {
    return view('welcome');
});
