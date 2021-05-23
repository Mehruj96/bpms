<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Service;

class ReportsController extends Controller
{
     public function expanse(){
         return view('backend.layouts.reports.expanse');
     }

     public function sales(){

        $services = Service::all();

        $customers = Customer::all();

        return view('backend.layouts.reports.sales',compact('services','customers'));
    }


    public function salesprofile()
    {
        return view('backend.layouts.reports.sales_profile');
    }
}
