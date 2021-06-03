<?php

namespace App\Http\Controllers\admin;

use App\Mail\AcceptedMail;
use App\Models\Nappointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Booking_Items;
use App\Models\Service;
use App\Models\Slot;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    // public function new()
    // {
    //     $appointment = Nappointment::with('appointmentService')->get();
    //     $slots = Slot::where('status','active')->get();
    //     $appointment = Nappointment::paginate(1);
    //     // dd($appointment);
    //     return view('backend.layouts.appointment.new', compact('appointment','slots'));
    // }

    public function new(Request $request)
    {
        $query =$request->input('search');

        if($request->input('search')){
            $appointment = Nappointment::where('name','like',"%{$query}%")->get();
            $slots = Slot::where('status','active')->get();
        }else{
            $appointment = Nappointment::with('appointmentService')->get();
            $slots = Slot::where('status','active')->get();
        }


        // $appointment = Nappointment::onlyTrashed()->paginate(1);
        return view('backend.layouts.appointment.new', compact('appointment','slots'));
    }

// All appointment
    public function all(Request $request)
    {
        $query =$request->input('search');

        if($request->input('search')){
            $appointment = Nappointment::where('name','like',"%{$query}%")->get();
        }else{
            $appointment = Nappointment::get();
        }


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
            'slot_id'  => $request->slot_id,
        ]);
        return redirect()->back();
    }



    public function delete($id){
        // print_r(Nappointment::select('email')->get());
        if(Nappointment::findOrFail($id)->delete()){
            Mail::to(Auth::user()->email)->send(new AcceptedMail());
        }
        return redirect()->route('new')->with('mark_success', 'This Appointment is Now avilable on All Appointment!');
    }


    public function unread($id){
        Nappointment::withTrashed()->find($id)->restore();
        return redirect()->route('all')->with('mark_success', 'This Appointment is Now avilable on New Appointment!');
    }

    public function force($id){
        Nappointment::findOrFail($id)->delete();
        // if(Nappointment::withTrashed()->findOrFail($id)->forceDelete()){
        //     Mail::to(Nappointment::select('email'))->send(new RejectedMail());
        // }
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


    public function timeslot(){
        $slots = Slot::all();
        return view('backend.layouts.appointment.timeslot', compact('slots'));
    }

    public function slotsDelete($id){
        Slot::findOrFail($id)->delete();
        return redirect()->route('timeslot');
    }


    public function timeslotAdd(Request $request){
        Slot::create([
            'from_time' => $request->from_time,
            'to_time' => $request->to_time,
        ]);
        return back();
    }

    // public function rejected(){
    //     return view('backend.layouts.appointment.rejected');
    // }

    // public function show(){
    //     return view('backend.layouts.appointment.view');
    // }


    // status update
    public function updateStatus($id,$status){
        $appointment=Nappointment::find($id);


        if($status === 'confirmed'){
            Mail::to($appointment->email)->send(new AcceptedMail());
            $appointment->update(['status'=>$status]);
        }else{
            $appointment->update(['status'=>$status]);
        }
        return redirect()->back();
    }



    //appointment_view page//

    public function view($id)
    {
        $Napointment=Nappointment::find($id);
        $booking = Booking_Items::where('appointment_id', $Napointment-> id)-> get();
        $total= $booking->sum('sub_total');
        // $services = Service::where('service_id')
        // dd($booking);
        return view('backend.layouts.appointment.view', compact('Napointment', 'booking'));
    }

}
