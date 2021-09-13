<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function index()
    {
        $products = $this->productModel
            ->where('is_public', config('product.public'))
            ->orderBy('sale_off', 'DESC')
            ->orderBy('price', 'DESC')
            ->paginate(config('product.paginate'));

        $categories = $this->categoryModel
            ->where('is_public', config('category.public'))
            ->get();

        return view('home-page', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }
}
