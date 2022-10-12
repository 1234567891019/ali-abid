<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;//this is for decleration of build in functions
class student extends Model
{
    use HasFactory;
    use SoftDeletes;//function or trash delete
}
