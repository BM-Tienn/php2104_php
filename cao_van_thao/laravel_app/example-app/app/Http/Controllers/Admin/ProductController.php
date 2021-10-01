<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $modelProduct;

    public function __construct(Product $product)
     {
         $this->modelProduct = $product;
     }
    public function index()
    {
        $products = $this->modelProduct
            ->paginate(config('product.paginate_admin'));

        return view('admin.products.index', [
            'products' => $products,
        ]);
        //dd('ok');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return redirect()->route('adminproducts.show', ['product' =>$id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->modelProduct->findOrFail($id);

        return view('admin.products.show', compact('product'));
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
        try {
            $product->delete();
            $msg = 'xóa thành công.';

            return redirect()
                ->route('adminproducts.index')
                ->with('msg', $msg);
        } catch (\Exception $e) {
            \Log::error("$e");
        }
        $error = 'đã có lỗi.';
        return redirect()
            ->route('adminproducts.index')
            ->with('error', $error);
    }
}
