<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    public function create()
    {
        return view('pages.upload');
    }

    public function store(Request $request)
    {
        $name = $request ->file('photo')->getClientOriginalName();
        $size = $request ->file('photo')->getSize();
        $type = $request ->file('photo')->getMimeType();
        $request->file('photo')->storeAs('public/images/slider',$name);
        $slider = new Slider();
        $slider->name = $name;
        $slider->size = $size;
        $slider->type = $type;
        $slider->save();
        return redirect()->back();
    }
}
