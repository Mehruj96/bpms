<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //Customer View Page
    public function customer(){
        $customers = Customer::all();
        return view('backend.layouts.customers.customer', compact('customers'));
    }
    //Customer Add
    public function add(Request $request){
        //dd($request->all()); check purpose
        Customer::create([
            'customer_name'  => $request->customer_name,
            'customer_email'  => $request->customer_email,
            'customer_contact'  => $request->customer_contact,
            'customer_address'  => $request->customer_address,
        ]);
        return redirect()->back();

    }

    public function edit($id){
        $customers = Customer::findOrFail($id);
        return view('backend.layouts.customers.edit', compact('customers'));
    }

    public function update(Request $request, $id){
        Customer::findOrFail($id)->update([
            'customer_name'  => $request->customer_name,
            'customer_email'  => $request->customer_email,
            'customer_contact'  => $request->customer_contact,
            'customer_address'  => $request->customer_address,
        ]);

        return redirect()->route('customer');
    }

    public function delete($id){
        Customer::findOrFail($id)->delete();
        return redirect()->route('customer');
    }
}
