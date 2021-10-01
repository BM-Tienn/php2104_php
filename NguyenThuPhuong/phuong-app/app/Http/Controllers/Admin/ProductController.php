<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\Auth;
use App\Http\Requests\StoreProductsRequest;

class ProductController extends Controller
{
    protected $productModel;
    protected $categoryModel;
       
        public function __construct( Product $products, Category $categories)
        {
            $this->productModel = $products;
            $this->categoryModel = $categories;
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->productModel
            ->paginate(config('product.paginate'));
        //dd($products);
        return view('admin.products.index',[
            'products' => $products,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories = $this->categoryModel->get();

        return view('admin.products.create',[
            'categories' => $categories,
        ]);    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductsRequest $request)
    {
        // $products = new Product;
        
        // $products->category_id = $request->category_id; 
        // //$products->user_id = $request->user_id;
        // $products->name = $request->name;
        // $products->price = $request->price;
        // //$products->image = $request->image;
        // $products->quantity = $request->quantity;
        // //$products->rate = $request->rate;
        // //$products->sold = $request->sold;
        // $products->is_public = $request->is_public;
        // $products->description = $request->description;
        // $products->sale_off = $request->sale_off;
        // //dd($products);
        // try{
        //     $products->save();
        $data = $request->only([
            'category_id',
            'user_id',
            'name',
            'image',
            'description',
            'price',
            'quantity',
            'sale_off',
            'is_public',
        ]);

        $data['category_id'] = (int) $data['category_id'];
        $data['is_public'] = isset($data['is_public']) ? (int) $data['is_public'] : 0;
        $data['user_id'] = auth()->id();
        
        try {

            $fileImg = $request->file('image');
           
            if ($fileImg) {
                $fileImg->store('public/products');
                $data['image'] = $fileImg->hashName();
            }

            $product = $this->productModel->create($data);
            //dd($product);
            return redirect()
                ->route('admin.product.show', ['id' => $product->id])
                ->withSuccess('Add product success!');
        } catch (\Exception $e) {
         
            \Log::error($e);

            return redirect()
                ->route('admin.products.index')
                ->withError('Add product failed. Please try again later!');
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
        $products = $this->productModel->findOrFail($id);

        return view('admin.products.show', [
            'products' => $products,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = $this->categoryModel->get();
        $products = $this->productModel->findOrFail($id);

        return view('admin.products.edit',[
            'products' => $products,
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
    public function update(StoreProductsRequest $request, $id)
    {
        $product = $this->productModel->findOrFail($id);
        
        // $products->category_id = $request->category_id;
        // $products->user_id = $request->user_id;
        // $products->name = $request->name;
        // $products->price = $request->price;
        // $products->image = $request->image;
        // $products->quantity = $request->quantity;
        // $products->rate = $request->rate;
        // $products->sold = $request->sold;
        // $products->is_public = $request->is_public;
        // $products->description = $request->description;
        // $products->sale_off = $request->sale_off;

        $product->category_id = (int) $product->category_id;
        $product->is_public = isset($product->is_public) ? (int) $product->is_public : 0;
        $product->user_id = auth()->id();
        
        $data = $request->only([
            'category_id',
            'user_id',
            'name',
            'image',
            'description',
            'price',
            'quantity',
            'sale_off',
            'is_public',
        ]);

        try {

            $fileImg = $request->file('image');

            if ($fileImg) {
                $fileImg->store('public/products');
                $data['image'] = $fileImg->hashName();
            }
            //$products->save();
            $product->update($data); 
            
            return redirect()
                ->route('admin.product.show', ['id' => $product->id])
                ->withSuccess('Edit product success!');

        } catch (\Exception $e) {
            
            \Log::error($e);

            return redirect()
                ->route('admin.products.index')
                ->withError('Edit product failed. Please try again later!');

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
        $product = $this->productModel->findOrFail($id);

        try {

            $product->delete();

            return redirect()
                ->route('admin.products.index')
                ->withSuccess('Delete success!');

        } catch (\Exception $e) {
            
            \Log::error($e);

            return redirect()
                ->route('admin.products.index')
                ->withError('Delete failed. Please try again later!');
        } 
        
    }

    public function search(Request $request)
    {
        $keySearch = $request->get('keyS');
       
        $products =  $this->productModel
            ->where('name', 'like', '%' . $keySearch . '%')
            ->paginate(config('product.paginate'));
        
        return view('admin.products.index',[
            'products' => $products,
        ]);
    }
}