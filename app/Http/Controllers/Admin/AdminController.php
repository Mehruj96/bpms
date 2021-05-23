<?php

namespace App\Http\Controllers\admin;

use App\Models\Service;
use App\Models\Customer;
use App\Models\Nappointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Sales;


class admincontroller extends Controller
{
     public function dashboard(){
         $total_customer = Customer::count();
         $total_services = Service::count();
         $today_amount =Nappointment::whereDate('sales_date', now()->format('Y-m-d'))->sum('paid_amount');

         $yesterday_amount =Nappointment::whereDate('sales_date', now()->subDay()->format('Y-m-d'))->sum('paid_amount');


         $last_seven_amount =Nappointment::whereDate('sales_date', now()->subDays(7)->format('Y-m-d'))->sum('paid_amount');


         return view('backend.layouts.dashboard', compact('total_customer', 'total_services','today_amount','yesterday_amount','last_seven_amount'));
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
