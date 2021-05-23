<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;

class FprofileController extends Controller
{

    public function profile(Request $request){
        $query =$request->input('search');
        if($request->input('search')){
            $profile = User::where('role', '=', 'user')->where('name','like',"%{$query}%")->get();
        }else{
            $profile = User::where('role', '=', 'user')->get();
        }

        return view('backend.layouts.profile', [
            'user_list'  =>$profile
        ]);
    }

    public function delete($id){
        User::findOrFail($id)->delete();
        return redirect()->route('profile');
    }

}
