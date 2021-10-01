<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;

class AdminProductController extends Controller
{
    protected $modelProduct;
    protected $categoryModel;

    public function __construct(Product $product, Category $category)
    {
        $this->modelProduct = $product;
        $this->categoryModel = $category;
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
        $categories = $this->categoryModel
            ->pluck('name', 'id')
            ->toArray();

        return view('admin.product.admin-add-product', [
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only([
            'category_id',
            'name',
            'title',
            'image',
            'price',
            'description',
            'quantity',
            'is_public',
        ]);

        $data['category_id'] = (int) $data['category_id'];
        $data['is_public'] = isset($data['is_public']) ? (int) $data['is_public'] : 0;
        $data['user_id'] = auth()->id();

       /*  dd($data); */

        try {
            $product = $this->modelProduct->create($data);
            $msg = 'Create Product Successfully';

            return redirect()
                ->route('admin.products.index')
                ->with('msg', $msg);
        } catch (\Exception $e) {
            \Log::error($e);

            $error = 'Something went wrong. Please try againt!';

            return redirect()
                ->route('admin.products.index')
                ->with('error', $error);
        }
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
        $product = $this->modelProduct->findOrFail($id);
        $categories = $this->categoryModel
            ->pluck('name', 'id')
            ->toArray();

        return view('admin.product.admin-edit-product', [
            'product' => $product,
            'categories' => $categories,
        ]);
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
        $data = $request->only([
            'category_id',
            'name',
            'title',
            'image',
            'price',
            'description',
            'quantity',
            'is_public',
        ]);

        $data['category_id'] = (int) $data['category_id'];
        $data['is_public'] = isset($data['is_public']) ? (int) $data['is_public'] : 0;
        $data['user_id'] = auth()->id();

        /* dd($data); */

        try {
            $product = $this->modelProduct->findOrFail($id)->update($data);
            $msg = 'Update Product Successfully';

            return redirect()
                ->route('admin.products.index')
                ->with('msg', $msg);
        } catch (\Exception $e) {
            \Log::error($e);

            $error = 'Something went wrong. Please try againt!';

            return redirect()
                ->route('admin.products.index')
                ->with('error', $error);
        }
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
