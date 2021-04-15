<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Beautician;
use App\Models\Nappointment;

class HomeController extends Controller
{
    public function about(){
        return view('frontend.layouts.about');
    }

    public function servicesf(){
        $services = Service::all();
        return view('frontend.layouts.servicesf', compact('services'));
    }

    public function beauticianf(){
        $beautician = Beautician::all();
        return view('frontend.layouts.beauticianf', compact('beautician'));
    }

    public function contactf(){
        return view('frontend.layouts.contactf');
    }

    public function adminf(){
        return view('frontend.layouts.adminf');
    }

    public function appointmentf(){
        return view('frontend.layouts.appointmentf');
    }

    public function appointmentMake(Request $request){
        // dd($request->all());
        Nappointment::create([
            'name' => $request->name,
            'email' => $request->email,
            'service' => $request->service,
            'contact' => $request->contact,
            'appointment_date' => $request->appointment_date,
            'appointment_time' => $request->appointment_time,
        ]);

        return redirect()->back()->with('appointment_info', 'Thanks for Your Appointment');
    }

}
