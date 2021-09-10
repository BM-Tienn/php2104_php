<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductDetailsController extends Controller
{
    public function show ($id)
    {
        $product = DB::table('products')->find($id);

        return view('pages.product_details',['product'=>$product]);
    }
}
