<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    protected $categoryModel;
    protected $productModel;

    public function __construct(Category $category, Product $product)
    {
        $this->categoryModel = $category;
        $this->productModel = $product;
    }

    public function show($id)
    {
        $category = $this->categoryModel->findOrFail($id);

        $products = $category->products()
            ->where('category_id', $category->id)
            ->where('is_public', config('product.public'))
            ->orderBy('sale_off', 'DESC')
            ->orderBy('price', 'DESC')
            ->paginate(config('product.paginate'));

        return view('my-directory.categories-ms', [
            'category' => $category,
            'products' => $products,
        ]);
    }
}
