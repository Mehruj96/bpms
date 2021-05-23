<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function userprofile(){
        // $user_info = User::all();
        return view('frontend.layouts.userprofile');
    }
}
