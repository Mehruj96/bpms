<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class admincontroller extends Controller
{
     public function dashboard(){
         return view('backend.layouts.dashboard');
     }
     
     public function Home(){
         return view('backend.Home');
     }

     public function master(){
        return view('backend.master');
    }

    public function customer_list(){
        return view('backend.layouts.customers.customer_list');
    }

    public function appointment(){
        return view('backend.layouts.appointment.appointment');
    }
}
