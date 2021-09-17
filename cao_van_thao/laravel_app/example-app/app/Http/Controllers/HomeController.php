<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    protected $categoryModel;
    protected $productModel;

    public function __construct(Category $category, Product $product)
    {
        $this->categoryModel = $category;
        $this->productModel = $product;
    }

    public function index() {
        $products = $this->productModel
            ->where('is_public', config('product.public'))
            ->orderBy('sale_off', 'DESC')
            ->orderBy('price', 'DESC')
            ->paginate(config ('product.paginate_one'));
        $categories = $this->categoryModel
            ->where('is_public', config('category.public'))
            ->get();
        //dd($category);
        //$test = DB::table('products')
            //->where('id',10)
            //->update(['sale_off' => 0]);  
        //$test = DB::table('products')->find(10);  
         //dd($test);



        return view('home-page', [
            'products' => $products,
            'category' => $categories,
        ]);
    }
}