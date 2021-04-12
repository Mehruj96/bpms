<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function about(){
        return view('frontend.layouts.about');
    }

    public function servicesf()
    {
        $services = Service::all();
        return view('frontend.layouts.servicesf', compact('services'));
    }

    public function beauticianf(){
        return view('frontend.layouts.beauticianf');
    }

    public function appointmentf(){
        return view('frontend.layouts.appointmentf');
    }

    public function contactf(){
        return view('frontend.layouts.contactf');
    }

    public function adminf(){
        return view('frontend.layouts.adminf');
    }


}
