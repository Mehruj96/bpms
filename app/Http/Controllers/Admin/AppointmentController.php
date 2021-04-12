<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class AppointmentController extends Controller
{
     public function all(){
         return view('backend.layouts.appointment.all');
     }

     public function new(){
        return view('backend.layouts.appointment.new');
    }

    public function accepted(){
        return view('backend.layouts.appointment.accepted');
    }

    public function rejected(){
        return view('backend.layouts.appointment.rejected');
    }

    // public function show(){
    //     return view('backend.layouts.appointment.view');
    // }  
    
}
