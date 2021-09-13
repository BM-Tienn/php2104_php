<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\ShopProduct;

class CategoryController extends Controller
{
    protected $categoryModel;
    protected $productModel;

    public function __construct(Category $category, ShopProduct $product)
    {
        $this->categoryModel = $category;
        $this->productModel = $product;
    }

    public function index()
    {
        $products = $this->productModel
                    ->paginate(config('product.paginate'));

        return view('my-theme-page.categories-page', ['products' => $products]);
    }

    public function show($id)
    {
        $category = $this->categoryModel->findOrFail($id);

        $products = $this->productModel
            ->where('classify',$category->classify)
            ->paginate(config('product.paginate'));
            
        return view('my-theme-page.categories-page', [
            'category' => $category,
            'products' => $products,
        ]);
    }

}
