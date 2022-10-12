<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Singer;
use App\Models\Song;
class SingerController extends Controller
{
    public function add_singer(){
        $singer=new singer();
       $singer->name='sidhu';
       $singer->save();
       $singerids=[8,10];
       $singer->songs()->attach($singerids);
    }
    
     //Get Song Based on Singer ID 
     public function show_singer ( $id ) {
        $singer= song::find($id)->singers;
         return $singer ;
}
}