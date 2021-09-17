<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    protected $productModel;
    protected $categoryModel;

    public function __construct(Category $category, Product $product)
    {
        $this->categoryModel = $category;
        $this->productModel = $product;
    }

    public function shop()
    {
        $category = $this->categoryModel->get();

        $products = $this->productModel
            ->where('is_public', config('product.public'))
            ->orderBy('sale_off', 'DESC')
            ->orderBy('price', 'DESC')
            ->paginate(config('product.paginate'));

        return view('my-directory.shop-ms', [
            'category' => $category,
            'products' => $products,
        ]);
    }

    public function wishlist()
    {
        $products = Product::paginate(config('product.paginate1'));

        return view('my-directory.wishlist-ms', ['products' => $products]);
    }

    public function productSingle($id)
    {
        $product = Product::find($id);
        $products = Product::paginate(config('product.paginate1'));

        return view('my-directory.product-single-ms', ['product' => $product, 'products' => $products]);
    }
}
