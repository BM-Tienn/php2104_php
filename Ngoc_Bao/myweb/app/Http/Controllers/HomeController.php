<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;


class HomeController extends Controller
{
    protected $categorymodel;
    protected $productmodel;

    public function __construct(Category $category, Product $product)
    {
        $this->categorymodel = $category;
        $this->productmodel = $product;
    }

    /*
     * call from route('home-page)
     * return view home-page
     *
     */
    public function index($id=1)
    {
        $products = $this->productmodel->paginate(config('product.paginate8'));

        $categories = $this->categorymodel
            ->all();

        return view('home-page', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }

}
