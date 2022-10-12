<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class singer extends Model
{
    use HasFactory;
    use HasFactory;
    public function songs ()
        {
return $this->belongstomany(song::class,'singer_songs');
        }
}
