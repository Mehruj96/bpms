<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nappointment;

class AppointmentController extends Controller
{
     public function all(){
        $appointment = Nappointment::paginate(10);
         return view('backend.layouts.appointment.all', compact('appointment'));
     }


    public function add(Request $request){
        //dd($request->all()); check purpose
        Nappointment::create([
            'apointment_number'  => $request->appointment_number,
            'appointment_name'  => $request->appointment_name,
            'appointment_email'  => $request->appointment_email,
            'appointment_service' => $request->appointment_service,
            'appointment_contact' => $request->appointment_contact,
            'appointment_date'  => $request->appointment_date,
            'appointment_time'  => $request->appointment_time,
        ]);
        return redirect()->back();

    }





     public function new(){
        $appointment = Nappointment::paginate(1);
        // dd($appointment);
        return view('backend.layouts.appointment.new', compact('appointment'));
    }

    public function delete($id){
        Nappointment::findOrFail($id)->delete();
        return redirect()->route('new');
    }



}






     // public function accepted(){
    //     return view('backend.layouts.appointment.accepted');
    // }

    // public function rejected(){
    //     return view('backend.layouts.appointment.rejected');
    // }

    // public function show(){
    //     return view('backend.layouts.appointment.view');
    // }



