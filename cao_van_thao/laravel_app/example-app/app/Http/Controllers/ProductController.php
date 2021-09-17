<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    protected $productModel;
    
    public function __construct(Product $product)
    {
        $this->productModel = $product;
    }

    public function show($id)
    {
        $product = $this->productModel->findOrFaild($id);

        return view('products.product', ['products' => $product]);
    }

    public function Product() {
        //$product = $this->productModel->findOrFaild($id);
        $product = $this->productModel
            ->paginate(config ('product.paginate'));
        // dd($products);
        return view('products.product', ['products' => $product]);
    }

}
