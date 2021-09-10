<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $products = DB::table('products')
            ->orderBy('price','DESC')
            ->paginate(10);

        $sliders = DB::table('sliders')->get();

        $banners = DB::table('banners')->get();

        return view('welcome',[
            'products'=>$products,
            'sliders'=>$sliders,
            'banners'=>$banners
        ]);

    }
}
