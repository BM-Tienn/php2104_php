<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ShopController extends Controller
{
    public function shopIndex()
    {
        $products = DB::table('products')
            ->orderBy('price', 'ASC')
            ->paginate(12);
        
        return view('shopper-shop', ['products' => $products]);
    }
}