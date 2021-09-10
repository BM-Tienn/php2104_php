<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SingleController extends Controller
{
    public function show ($id)
    {
        $products = DB::table('shop_products')->find($id);
        
        if (!$products) {
            return redirect('theme-products-page');
        }
        return view('my-theme-page.single-page', ['product' => $products]);
    } 
}
