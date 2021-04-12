<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\beautician;

class BeauticianController extends Controller
{
     public function beautician(){
         return view('backend.layouts.beautician');
     }


}
