<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobile;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function add_customer ( ){
         $mobile =new Mobile( ); 
         $mobile->model= 'LG100 ' ;

          $customer =new Customer ( ) ;
           $customer->name='ali ' ;
            $customer->email='ali@gmail.com' ;
             $customer->save ( ) ;
              $customer-> mobile ( ) -> Save ( $mobile );                      
 }
public function show_mobile($id){
    $mobile=Customer::find($id)->mobile;
    return $mobile;
}


}

