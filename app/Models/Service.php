<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_name',
        'service_price',
        'image',

    ];
    // protected $graded=[];
    public function bookingService()
    {
       return $this->belongsTo(Service::class, 'service_id', 'id');

    }

}
