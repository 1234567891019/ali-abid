<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;
 
 
Route::get('video-upload', [ VideoController::class, 'getVideoUploadForm' ])->name('get.video.upload');
Route::post('video-upload', [ VideoController::class, 'uploadVideo' ])->name('store.video');