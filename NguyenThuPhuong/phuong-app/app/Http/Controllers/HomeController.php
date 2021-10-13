<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


class HomeController extends Controller
{
    public function index()
    {
        $products = Product::paginate(config('product.paginate'));

        $categories = Category::where('is_public', config('category.public'))
        ->get();

        return view('home-page', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }
    
}
