<?php

namespace App\Models;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nappointment extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'sales_date'=>'datetime',
    ];

    public function appointmentService(){
       return $this->belongsTo(Service::class, 'service_id', 'id');
    }
    public function appointmentBooking(){
        return $this->hasOne(Booking_Items::class, 'appointment_id', 'id');
     }


     public function bookingDetails(){

         return $this->hasMany(Booking_Items::class, 'appointment_id', 'id');
     }

     public function appointmentSlots(){

        return $this->belongsTo(Slot::class, 'slot_id', 'id');
    }
}
