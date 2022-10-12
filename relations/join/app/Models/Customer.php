<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public function mobile(){
        return $this->hasOne(Mobile::class);
    //    return $this->hasmany(Mobile::class);  // This is used for one to many function.
   //  return $this->belongsTomany(Mobile::class);       //  This is used for many top many function.
    
    }
}
