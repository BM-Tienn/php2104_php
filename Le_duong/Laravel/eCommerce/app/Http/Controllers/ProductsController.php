<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::all();
        return view('pages.manageProduct.product_index',['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view('pages.manageProduct.product_create',['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->name;
        $price = $request->price;
        $size = $request->size;
        $color = $request->color;
        $quanlity = $request->quanlity;
        $description1 = $request->description1;
        $description2 = $request->description2;
        $category = $request->category;
        $code = $request->code;
        $image = $request->file('product')->getClientOriginalName();
        $request->file('product')->storeAs('public/images/products',$image);
        $products = new Products();
        $products->name = $name;
        $products->price = $price;
        $products->size = $size;
        $products->color = $color;
        $products->quanlity = $quanlity;
        $products->description1 = $description1;
        $products->description2 = $description2;
        $products->category = $category;
        $products->photos = $image;
        $products->code = $code;
        $products->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Products::all()->find($id);
       return view('pages.shops_details',['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
