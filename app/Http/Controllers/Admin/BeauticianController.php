<?php

namespace App\Http\Controllers\admin;

use App\Models\Beautician;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BeauticianController extends Controller
{
    //  public function list(){
    //     $beautician = Beautician::all();
    //     return view('backend.layouts.beautician.list', compact('beautician'));
    // }

    public function list(Request $request)
    {
        $query =$request->input('search');

        if($request->input('search')){
            $beautician = Beautician::where('beautician_name','like',"%{$query}%")->get();
        }else{
            $beautician = Beautician::get();
        }
        return view('backend.layouts.beautician.list', compact('beautician'));
    }







    //services Add
    public function add(Request $request){
        $file_name='';

        //for picture upload//
        if($request->hasFile('beautician_image'))
        {
            $file=$request->file('beautician_image');
            if($file->isvalid());
            {
                $file_name=date('Ymdhms').'.'.$file->getClientOriginalExtension();
                $file->storeAs('beautician',$file_name);
            }
        }
                Beautician::create([
                    'beautician_name' => $request->beautician_name,
                    'beautician_number'  => $request->beautician_number,
                    'beautician_address'  => $request->beautician_address,
                    'beautician_image'=>$file_name,
                ]);
                return redirect()->back();

    }

    public function edit($id){
        $beautician = Beautician::findOrFail($id);
        return view('backend.layouts.beautician.edit', compact('beautician'));
    }

    public function update(Request $request, $id){
        // $beautician = Beautician::findOrFail($id);
        $file_name = '';
        if($request->hasFile('beautician_image')){
            $file = $request->file('beautician_image');
            if($file->isValid()){
                $file_name = date('Ymdhms').'.'.$file->getClientOriginalExtension();

                $file->storeAs('beautician', $file_name);
            }
        }

        Beautician::FindOrFail($id)->update([
            'beautician_name' => $request->beautician_name,
            'beautician_number'  => $request->beautician_number,
            'beautician_address'  => $request->beautician_address,
            'beautician_image' => $file_name,
        ]);
        return redirect()->route('beautician');
    }

    public function delete($id){
        Beautician::findOrFail($id)->delete();
        return redirect()->route('beautician');
    }


}
