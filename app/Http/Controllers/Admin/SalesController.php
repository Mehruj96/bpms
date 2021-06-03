<?php

namespace App\Http\Controllers\admin;

use App\Models\Service;
use App\Models\Customer;
use App\Models\Nappointment;
use Illuminate\Http\Request;
use App\Models\Booking_Items;
use App\Http\Controllers\Controller;

class SalesController extends Controller
{
    // public function sales(){
    //     $appointment = Nappointment::with('appointmentService')->where('type','sale')->get();

    //     return view('backend.layouts.sales',compact('appointment'));
    // }

    public function sales(Request $request)
    {
        $query =$request->input('search');

        if($request->input('search')){
            $appointment = Nappointment::where('name','like',"%{$query}%")->get();
        }else{
            $appointment = Nappointment::get();
        }
        return view('backend.layouts.sales',compact('appointment'));
    }





    //invoice//
    public function invoice($id){
        $invoice = Nappointment::with('bookingDetails.bookingService')->find($id);

        $total =0;

        foreach($invoice->bookingDetails as $item){

            $total += $item->service_price * $item->service_quantity;
        }
          return view('backend.layouts.invoice',compact('invoice','total'));
    }


    public function salesprofile()
    {
        return view('backend.layouts.sales_profile');
    }

    public function salesCreate($id){


        return view('backend.layouts.sales_profile',compact('id'));
    }


    public function salesStore(Request $request,$id){

        $appointment = Nappointment::where('id',$id)->first();
        $last = $appointment->id +1;
        $invoice_number = sprintf('%07d', $last);

       $appointment->update([
           'paid_amount' => $request->input('amount'),
           'payment_type'=>$request->input('payment_type'),
           'type'=>'sale',
           'sales_date'=>now(),
           'invoice_no'=>$invoice_number,
       ]);
       return redirect()->back();
    }
}
