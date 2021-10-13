<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::paginate(config('category.paginate'));

        return view('mypage.home-page', ['category' => $category]);
    }

    public function category($id)
    {  
        $category = Category::findOrFail($id);

        $products = Product::where('category_id', $category->id)
            ->paginate(config('product.paginate'));;

        return view('mypage.category', [
            'products' => $products,
            'category' => $category]);
    }
}
