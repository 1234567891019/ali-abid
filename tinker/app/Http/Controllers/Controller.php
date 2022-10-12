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
// Tinker allows you to interact with your entire Laravel application on the command line,
//  including your Eloquent models, jobs, events, and more. To enter the Tinker environment,
//   run the tinker Artisan command: php artisan tinker. 
// Go inside the tinker using the command “php artisan tinker”. Then create your data which 
// you want to unsert in DB.