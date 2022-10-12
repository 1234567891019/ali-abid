<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\studentcontroller;


Route::get('/',[ studentcontroller::class, 'index'] )->name('index');
Route::post('/',[ studentcontroller::class, 'create'] )->name('create');
Route::get('/trash',[ studentcontroller::class, 'trash'] );
Route::get('/edit/{id}',[ studentcontroller::class, 'edit'] )->name('edit');
Route::put('/edit/{id}',[ studentcontroller::class, 'update'] )->name('update');
Route::get('/delete/{id}',[ studentcontroller::class, 'destroy'] )->name('destroy');
Route::get('/restore/{id}',[ studentcontroller::class, 'restore'] )->name('restore');
Route::get('/force-delete/{id}',[ studentcontroller::class, 'forceDelete'] )->name('force-delete');
//This is the routes that give us the path that which controller is working and which method is used. 
// if we want to make less routes than we use resourcse routes in it. resource route is that intellegent that
//  they know that which method is using by the file. we dont have to make multiple routes for multile files

