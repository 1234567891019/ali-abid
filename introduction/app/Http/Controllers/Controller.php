<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}


// 1.)Introduction:-                                    
// What is Laravel used for?
// Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.
// Is Laravel a frontend or backend?
// Laravel is a backend framework that provides all of the features you need to build modern web applications, such as routing, validation, caching, queues, file storage, and more.
// Is Laravel a programming language?
// No, Laravel is a framework and the language that it uses is PHP
