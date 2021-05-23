<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    //services View Page
    // public function services()
    // {
    //     $services = Service::all();
    //     return view('backend.layouts.service.list', compact('services'));
    // }

    public function services(Request $request)
    {
        $query =$request->input('search');

        if($request->input('search')){
            $services = Service::where('service_name','like',"%{$query}%")->get();
        }else{
            $services = Service::get();
        }
        return view('backend.layouts.service.list', compact('services'));
    }

//services Add
    public function add(Request $request)
    {
        // dd($request->all());
        $file_name = '';

        //for picture upload//
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isvalid()); {
                $file_name = date('Ymdhms') . '.' . $file->getClientOriginalExtension();
                $file->storeAs('service', $file_name);
            }
        }
        Service::create([
            'service_name'  => $request->service_name,
            'service_price'  => $request->service_price,
            'image' => $file_name
        ]);
        return redirect()->back();
    }

    public function delete($id)
    {
        Service::findOrFail($id)->delete();
        return redirect()->route('services');
    }

    public function update(Request $request,$id){
        //first collect that specific product by $id
        $service_list = Service::findOrFail($id);
        //then store it's previous image
        $filename = $service_list->image;

        if($request->hasFile('image')){
            $file = $request->file('image');
            if ($file->isValid()) {
                $filename =date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('service', $filename);
            }
        }

        $service_list->update([
            'service_name'  => $request->service_name,
            'service_price'  => $request->service_price,
            'image' => $filename
        ]);

        return redirect()->route('services')->with('success', 'Product Updated Successfully');
    }


    public function edit($id){
        $service = Service::findOrFail($id);
        return view('backend.layouts.service.edit', compact('service'));
    }
}
