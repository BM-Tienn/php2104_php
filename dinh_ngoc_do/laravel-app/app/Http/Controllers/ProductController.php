<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    protected $productModel;

    public function __construct(Product $product)
    { 
        $this->productModel = $product;
    }

    public function productInfo($id)
    {
        $products = $this->productModel
            ->take(5)
            ->orderBy('price', 'DESC')    
            ->get();

        $product = $this->productModel->find($id);
        /* dd($product); */

        return view('shopper-shop-single', [
            'product' => $product,
            'products' => $products,
        ]);
    }
}
