<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ShopController extends Controller
{
    protected $productModel;
    protected $categoryModel;

    public function __construct(Product $product, Category $category)
    {
        $this->productModel = $product;     
        $this->categoryModel = $category;
    }

    public function shopIndex()
    {
        $category = $this->categoryModel
            ->take(3)
            ->get();

        /* $category = $this->categoryModel->findOrFail($id); */

        $products = $this->productModel
            ->orderBy('price', 'ASC')
            ->paginate(12);

        /* $products = $category->products;

        dd($products); */
        
        return view('shopper-shop', [
            'products' => $products,
            'categories' => $category,
        ]);
    }
}