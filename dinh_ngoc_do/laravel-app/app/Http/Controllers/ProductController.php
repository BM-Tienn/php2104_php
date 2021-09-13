<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function productInfo($id)
    {
        $product = DB::table('products')->find($id);
        /* dd($product); */

        return view('shopper-shop-single', ['product' => $product]);
    }
}
