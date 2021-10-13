<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class ProductDetailController extends Controller
{
    protected $productModel;
    
    public function __construct(Product $product)
    {
        $this->productModel = $product;
    }

    public function ProductDetail($id)
    {
        $product = $this->productModel->find($id);

        if (!$product) {
            return redirect('products.product');
        }

        return view('products.product-detail', ['product' => $product]);
    }
}

