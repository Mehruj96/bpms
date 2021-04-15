<?php

namespace App\Http\Controllers\admin;

use App\Models\Service;
use App\Models\Customer;
use App\Models\Nappointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class admincontroller extends Controller
{
     public function dashboard(){
         $total_customer = Customer::count();
         $total_services = Service::count();
         return view('backend.layouts.dashboard', compact('total_customer', 'total_services'));
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
