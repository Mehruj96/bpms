<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slot;
use App\Models\About;
use App\Models\Service;
use App\Models\Beautician;
use App\Models\Nappointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function about(){
        $about = About::orderBy('id', 'desc')->take(1)->get();
        return view('frontend.layouts.about', compact('about'));
    }

    public function servicesf(){
        $services = Service::all();
        return view('frontend.layouts.servicesf', compact('services'));
    }

    public function servicesView($id)
    {
        $service = Service::find($id);
        return view('frontend.layouts.service-view', compact('service'));
    }

    public function beauticianf(){
        $beautician = Beautician::all();
        return view('frontend.layouts.beauticianf', compact('beautician'));
    }
    public function beauticianView($id){
        $beautician = Beautician::find($id);
        return view('frontend.layouts.beautician-view', compact('beautician'));
    }

    public function contactf(){
        return view('frontend.layouts.contactf');
    }

    public function adminf(){
        return view('frontend.layouts.adminf');
    }

    public function appointmentf($id){
        // dd($appointment);
        $service = Service::where('id',$id)->first();
        $slots = Slot::all();
        return view('frontend.layouts.appointmentf',compact('service', 'slots'));
    }

    public function appointmentMake(Request $request,$id){
        // dd($request->all());

        $service = Service::where('id',$id)->first();
        $check=Nappointment::where('slot_id',$request->slot_id)
                            ->whereDate('created_at',$request->appointment_date)
                            ->get();

        if($check->count()==0)
        {
            $a = Nappointment::create([
                'name' => $request->name,
                'user_id' => auth()->user()->id,
                'email' => $request->email,
                'service_id' => $service->id,
                'contact' => $request->contact,
                'appointment_date' => $request->appointment_date,
                'slot_id' => $request->slot_id,
            ]);


            return redirect()->back()->with('appointment_info', 'Thanks for Your Appointment');
        }else{
            return redirect()->back()->with('appointment_info', 'Already Booked');
        }

    }

}
