<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutusController extends Controller
{
    public function view()
    {
        $about = About::all();
        return view('backend.layouts.about.list', compact('about'));
    }

    public function form()
    {
        return view('backend.layouts.about.form');
    }

    //About Craete
    public function create(Request $request)
    {
        $file_name = '';
        if ($request->hasFile('about_image')) {
            $file = $request->file('about_image');
            if ($file->isvalid()); {
                $file_name = date('Ymdhms') . '.' . $file->getClientOriginalExtension();
                $file->storeAs('about', $file_name);
            }
        }
        About::create([
            'about_info' => $request->about_info,
            'about_image' => $file_name,
        ]);
        return redirect()->route('aboutus');
    }

    public function delete($id)
    {
        About::findOrFail($id)->delete();
        return redirect()->route('aboutus');
    }
}
