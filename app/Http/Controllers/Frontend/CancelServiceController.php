<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Service;
use App\Models\Nappointment;
use Illuminate\Http\Request;
use App\Models\Booking_Items;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CancelServiceController extends Controller
{
    public function cancelservice($id){

        $Napointment=Nappointment::find($id);
        $booking = Booking_Items::where('appointment_id', $Napointment-> id)-> get();
        $total= $booking->sum('sub_total');


        return view('frontend.layouts.cancelservice',compact('Napointment', 'booking'));
    }

}
