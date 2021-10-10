<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\ShopProduct;

class OrderController extends Controller
{
    protected $categoryModel;
    protected $productModel;

    public function __construct(Category $category, ShopProduct $product)
    {
        $this->categoryModel = $category;
        $this->productModel = $product;
    }

    public function saveDataToSession(Request $request)
    {
        session([
            'key' => 'value'
        ]);


    }
}