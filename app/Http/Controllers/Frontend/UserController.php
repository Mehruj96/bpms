<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterCheck;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('frontend.layouts.login');
    }

    public function doLogin(Request $request){
        // dd($request->all());
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $loginData=$request->only('email','password');

        if(Auth::attempt($loginData))
        {
            return redirect()->intended(route('home'))->with('success',' Login Successfull.');
        } else{
            session()->flash('type','danger');
            session()->flash('message','These credentials do not match our records.');
            return redirect()->back();
        }
    }

    public function register(){
        return view('frontend.layouts.register');
    }

    public function doRegister(RegisterCheck $request){
        // $request->validate([
        //     'email' => 'required|unique:users,email',
        //     'password' => 'required|min:6',
        //     'contact' => 'required|min:11'
        // ]);
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'contact' => $request->contact,
            'address' => $request->address
        ]);
        return redirect()->route('user.login')->with('success','User Registration Successful.');
    }


    public function logout(){
        Auth::logout();
        return redirect()->route('user.login')->with('success','Logout Successful.');
    }
}
