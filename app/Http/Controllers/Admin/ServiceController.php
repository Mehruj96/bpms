<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    //services View Page
    public function services(){
        $services = Service::all();

        return view('backend.layouts.services', compact('services'));
    }
    //services Add
    public function add(Request $request){
    // dd($request->all());
    $file_name='';

//for picture upload//
if($request->hasFile('image'))
{
    $file=$request->file('image');
    if($file->isvalid());
    {
        $file_name=date('Ymdhms').'.'.$file->getClientOriginalExtension();
        $file->storeAs('service',$file_name);
    }
}
        Service::create([
            'service_name'  => $request->service_name,
            'service_price'  => $request->service_price,
            'image'=>$file_name
        ]);
        return redirect()->back();

    }

    public function delete($id){
        Service::findOrFail($id)->delete();
        return redirect()->route('services');
    }
}
