<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class PagesController extends Controller
{
     public function about(){
         return view('backend.layouts.pages.about');
     }

     public function contact(){
        return view('backend.layouts.pages.contact');
    }
}