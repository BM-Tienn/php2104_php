<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

class PhotosController extends Controller
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
        $request->file('photo')->storeAs('public/images/products',$name);
        $photos = new Photo();
        $photos->name = $name;
        $photos->size = $size;
        $photos->type = $type;
        $photos->save();

        return back();
    }
}
