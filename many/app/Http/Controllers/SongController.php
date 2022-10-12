<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Singer;
use App\Models\Song;

class SongController extends Controller
{
    public function add_song()
    {
        $song=new song();
        
        $song->tittle='123456';
        $song->tittle='33333';
        $song->tittle='22222';
        $song->save();

    }


    
    //Get Song Based on Singer ID 
    public function show_song ( $id ) {
        $song= Singer::find($id)->songs;
         return $song ;
}}

