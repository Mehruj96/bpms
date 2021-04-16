<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nappointment;

class AppointmentController extends Controller
{
    public function new()
    {
        $appointment = Nappointment::all();
        // $appointment = Nappointment::paginate(1);
        // dd($appointment);
        return view('backend.layouts.appointment.new', compact('appointment'));
    }


    public function all()
    {
        $appointment = Nappointment::onlyTrashed()->get();
        // $appointment = Nappointment::onlyTrashed()->paginate(1);
        return view('backend.layouts.appointment.all', compact('appointment'));
    }


    public function add(Request $request)
    {
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


    public function delete($id)
    {
        Nappointment::findOrFail($id)->delete();
        return redirect()->route('new')->with('mark_success', 'This Appointment is Now avilable on All Appointment Blade!');
    }

    public function unread($id){
        Nappointment::withTrashed()->find($id)->restore();
        return redirect()->route('all')->with('mark_success', 'This Appointment is Now avilable on New Appointment Blade!');
    }

    public function force($id){
        Nappointment::withTrashed()->findOrFail($id)->forceDelete();
        return redirect()->route('all')->with('mark_success', 'This Appointment Successfully Deleted!');
    }


    public function markRead(Request $request){
        // dd($request->all());
        if($request->mark_read){
            foreach($request->mark_read as $data){
                Nappointment::find($data)->delete();
            }

            return back()->with('mark_read', 'Mark All Successfully!');
        } else{

            return back()->with('no_mark_read', 'At least One Selected!');
        }
    }


    // public function markDelete(Request $request){
    //     if($request->mark_delete){
    //         foreach($request->mark_delete as $data){
    //             Nappointment::findOrFail($data)->delete();
    //         }
    //         return back()->with('mark_delete', 'Mark Delete Successfully!');

    //     } else{

    //         return back()->with('no_mark_delete', 'At least One Selected!');
    //     }
    // }

     // public function accepted(){
    //     return view('backend.layouts.appointment.accepted');
    // }

    // public function rejected(){
    //     return view('backend.layouts.appointment.rejected');
    // }

    // public function show(){
    //     return view('backend.layouts.appointment.view');
    // }
}
