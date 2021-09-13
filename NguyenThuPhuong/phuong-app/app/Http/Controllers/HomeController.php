<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        $products = DB::table('products')->paginate(config('product.paginate'));

        return view('home-page', ['products' => $products]);
    }

    public function shop()
    {
        $products = DB::table('products')->paginate(8);

        return view('my-directory.shop-ms', ['products' => $products]);
    }

    public function wishlist()
    {
        $products = DB::table('products')->get();

        return view('my-directory.wishlist-ms', ['products' => $products]);
    }
    
    public function productSingle($id)
    {
        $product = DB::table('products')->find($id);
        $products = DB::table('products')->paginate(4);

        return view('my-directory.product-single-ms', ['product' => $product, 'products' => $products]);
    }
}
