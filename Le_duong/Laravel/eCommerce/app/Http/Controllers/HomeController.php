<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhotoSliders;
use App\Models\Categories;
use App\Models\Products;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = PhotoSliders::all();
        $categories = Categories::all();
        $products = Products::all();
        return view('home',[
            'sliders' => $sliders,
            'categories' => $categories,
            'products' => $products
        ]);
    }
}
