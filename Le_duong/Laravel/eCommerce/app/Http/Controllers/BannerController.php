<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    public function create()
    {
        return view('pages.upload');
    }

    public function store(Request $request)
    {
        $name = $request->file('photo')->getClientOriginalName();
        $size = $request->file('photo')->getSize();
        $type = $request->file('photo')->getMimeType();
        $request->file('photo')->storeAs('public/images/banner', $name);
        $banners = new Banner();
        $banners->name = $name;
        $banners->size = $size;
        $banners->type = $type;
        $banners->save();
        return back();
    }
}
