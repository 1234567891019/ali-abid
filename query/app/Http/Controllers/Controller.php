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
// Step1). Connect your database with a project . go to .env file and set compare and connect.
// Step2). Add namespace to your controller. 
//  use/illuminate/support/facades/DB; 
// Step3). Create a database and table.
// Step4). Create a method in your controller and add your sql query by using DB class.

// step5). Get route this at web.php
