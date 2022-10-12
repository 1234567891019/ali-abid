<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class song extends Model
{
    public function singers ()
    {
return $this->belongstomany(singer::class,'singer_songs');
    }
    
}
