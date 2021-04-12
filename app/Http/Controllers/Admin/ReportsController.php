<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class ReportsController extends Controller
{
     public function expanse(){
         return view('backend.layouts.reports.expanse');
     }

     public function sales(){
        return view('backend.layouts.reports.sales');
    }
}