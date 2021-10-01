<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    protected $categoryModel;
    protected $productModel;

    public function __construct(Category $category, Product $product) {

        $this->categoryModel = $category;
        $this->productsModel = $product;
    }

    public function categories($id)
    {
        $category = $this->categoryModel->FindOrFail($id);

        $products = $this->productModel
            ->where('category_id', $category->id)
            ->where('is_public', config('product.public'))
            ->orderBy('sale_off', 'DESC')
            ->orderBy('price', 'DESC')
            ->paginate(config('product.paginate'));

            return view('products.product', [
                'products' => $products,
                'category' => $category,
        ]);
    }
}
