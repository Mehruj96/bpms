<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    use HasFactory;
    protected $guarded=[];


    protected $casts = [
        'from_time'=>'datetime',
        'to_time'=>'datetime',
    ];
}
