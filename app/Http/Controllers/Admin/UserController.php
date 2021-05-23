<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   public function showLoginForm(){
    return view('backend.layouts.login');
   }

   public function login(Request $request){
       $request->validate([
           'email'=> 'required|email',
           'password'=>'required|min:6|max:16',
       ]);
       $loginData=$request->only('email','password');
       if(Auth::attempt($loginData)){
       return redirect()->route ('dashboard')->with('success','User Login Success.');
       }else{
           session()->flash('type','danger');
           session()->flash('message','These credentials do not match our records.');
           return redirect()->back();
       }
   }

   public function logout(){
       Auth::logout();
       session()->flash('type','success');
       session()->flash('message','Logout Successful.');
       return redirect()->route('login');
   }
}
