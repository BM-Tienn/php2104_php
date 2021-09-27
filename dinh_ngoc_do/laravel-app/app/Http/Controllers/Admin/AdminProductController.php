<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class AdminProductController extends Controller
{
    protected $modelProduct;

    public function __construct(Product $product)
    {
        $this->modelProduct = $product;
        /* $this->categoryModel = $category; */
    }

    public function index()
    {
        $products = $this->modelProduct
            ->paginate(10);

        return view('admin.product.admin-product', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.admin-add-product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $product = $this->modelProduct->findOrFail($id);
        /* dd($product); */

        try {
            $product->delete();
            $msg = 'Delete Product Successfully';

            return redirect()
                ->route('admin.products.index')
                ->with('msg', $msg);
        } catch (\Exception $e) {
            \Log::error($e);

            $error = 'Something went wrong. Please try againt!';

            return redirect()
                ->route('admin.products.index')
                ->with('msg', $error);
        }

    }
}
