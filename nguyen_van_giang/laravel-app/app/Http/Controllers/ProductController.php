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

    public function show($id)
    {
        $product = $this->productModel->findOrFail($id);

        return view('products.show', ['product' => $product]);
    }
}
