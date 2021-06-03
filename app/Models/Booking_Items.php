<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking_Items extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'booking_items';

    public function bookingService()
    {
       return $this->belongsTo(Service::class, 'service_id', 'id');

    }
}
