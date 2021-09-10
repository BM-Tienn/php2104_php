<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function show($id)
    {
        $product = DB::table('products')->find($id);

        if (!$product) {
            return redirect('home-page');
        }

        return view('products.show', ['product' => $product]);
    }
}
