<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Categories;
class SearchController extends Controller
{
    public function show(Request $request)
    {
        $resultSeach = $request->input('search_product');
        $categories = Categories::all();
        $products = Products::query()
            ->where('name','LIKE',$resultSeach)
            ->get();
        return view('pages.search',[
            'products' => $products,
            'categories' => $categories,
            'resultSearch' => $resultSeach
        ]);
    }
}
