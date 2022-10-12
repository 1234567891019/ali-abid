<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MobileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('add_customer',[CustomerController::class,'add_customer']);
Route::get('show_mobile/{id}',[CustomerController::class,'show_mobile']);


Route::get('/', function () {
    return view('welcome');
});
