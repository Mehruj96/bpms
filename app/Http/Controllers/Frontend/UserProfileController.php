<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Nappointment;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function userprofile(){
        // $user_info = User::all();
        $appointment = Nappointment::with(['appointmentSlots'])->where('user_id', auth()->User()->id)->get();
        // dd($appointment);
        return view('frontend.layouts.userprofile', compact('appointment'));
    }

}
