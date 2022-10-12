<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Faker\Factory as Faker;//write when faker use..if only seder use than no need

class studentseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();           //for faker if use
        for($i = 1; $i<=100;$i++ )          // loop when faker use
        
        {                                   
        $student       = new student;      // $student       = new student;      
        $student->name = $faker->name;          //$student->name = "ali" ;  
        $student->city = $faker->city;          //$student->city = "fsd";
        $student->email = $faker->email;        // $student->email = "ali @gmail.com";
        $student->marks =  $faker->randomDigit;      //  $student->marks =  "100";
        $student->save();                      //$student->save();
                                     //comments ma only seeder ka code use hova

        }        
    }
}



