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

    /*
     * call from route('product-single-ms')
     * return view(my-directory.product-single-ms)
     *
     * */
    public function show($id=1)
    {
        $product = $this->productModel->findOrFail($id);

        return view('my-directory.product-single-ms', [
            'product' => $product,
            'products' => $this->productModel->paginate(config('product.paginate4')),
        ]);
    }

    /*
     * call from route('product-single-ms')
     * return view(my-directory.shop-ms)
     *
     * */
    public function shop()
    {
        $products = $this->productModel->paginate(config('product.paginate12'));
        return view('my-directory.shop-ms', ['products' => $products]);
    }

    /*
     * call from route('wishlish-ms')
     * return view(my-directory.wishlish-ms)
     *
     * */
    public function wishlist()
    {
        $products = $this->productModel->paginate(config('product.paginate8'));
        return view('my-directory.wishlist-ms', ['products' => $products]);


    }


}
