<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductHistory;
use App\Models\ProductHistoryDetail;

class ProductController extends Controller
{
    protected $modelProduct;
    protected $modelCategory;
    protected $modelProductHistory;
    protected $modelProductHistoryDetail;

    public function __construct(
        Product $product,
        Category $category,
        ProductHistory $productHistory,
        ProductHistoryDetail $productHistoryDetail
        ){
        $this->modelProduct = $product;
        $this->modelCategory = $category;
        $this->modelProductHistory = $productHistory;
        $this->modelProductHistoryDetail = $productHistoryDetail;
    }

    public function index()
    {
        //return view get data
        $products = $this->modelProduct->paginate(config('product.paginate10'));
        $user = auth()->user();

        return view('admin.products.index',[
            'products'=>$products,
            'user' => $user
        ]);
    }


    public function create()
    {
        $categories = $this->modelCategory->all();
        $user = auth()->user();

        return view('admin/products.create',[
            'categories' => $categories,
            'user' => $user
        ]);
    }


    public function store(Request $request)
    {
        $data  = $request->only([
            'category_id',
            'name',
            'description',
            'price',
            'quantity',
            'sale_off',
            'is_public',
        ]);

        $data['category_id'] = (int) $data['category_id'];
        $data['is_public'] = isset($data['is_public']) ? (int) $data['is_public'] : 0;
        $data['user_id'] = auth()->id();

        $data_history_product = [];

        
        try {
            $product = $this->modelProduct->create($data);
            $msg = 'Create product success.';

            /* 
            * create product history 
            */
            
            $data_history_product['user_id'] = auth()->id();
            
            $data_history_product['product_id'] = $product->id;
            
            $producthistory = $this->modelProductHistory->create($data_history_product);
            /* 
            * create product history detail
            */
            unset($data['user_id']);
            $data['product_history_id'] = $producthistory->id;
            $producthistorydetail = $this->modelProductHistoryDetail->create($data);

            return redirect()
                ->route('products.show', ['product' => $product->id])
                ->with('msg', $msg);
        } catch (\Exception $e) {
            \Log::error($e);
        }

        $error = 'Something went wrong.';

        return redirect()
            ->route('products.index')
            ->with('error', $error);
    }


    public function show($id)
    {
        $user = \Auth::user();
        $product = $this->modelProduct->findOrFail($id);
        $producthistory = $this->modelProductHistory->where('product_id', $product->id)->first();
        
        $producthistorydetails = $producthistory->producthistorydetails->toArray();

        return view('admin.products.show',[
            'product'=>$product,
            'user' => $user,
            'producthistory' => $producthistory,
            'producthistorydetails' => $producthistorydetails,
        ]);
    }

    public function edit($id)
    {
        $product = $this->modelProduct->findOrFail($id);
        $categories = $this->modelCategory->all();
        $user = \Auth::user();

        return view('admin.products.edit',[
            'product'=>$product,
            'categories'=>$categories,
            'user' => $user
        ]);
    }


    public function update(Request $request, $id)
    {
        $product = $this->modelProduct->findOrFail($id);

        $data = $request->only([
            'category_id',
            'name',
            'description',
            'price',
            'quantity',
            'sale_off',
            'is_public',
        ]);

        $data['category_id'] = (int) $data['category_id'];
        $data['is_public'] = isset($data['is_public']) ? (int) $data['is_public'] : 0;
        $data['user_id'] = $product->id;

        try {
            $product->update($data);
            $msg = 'Update product success.';

            //  UPDATE PRODUCT HISTORY 
            
            $producthistory = $this->modelProductHistory
                ->where('user_id', auth()->id())
                ->where('product_id', $product->id)
                ->get()
                ->toArray();

            unset($data['user_id']);
            if(count($producthistory) > 0) {

                $data['product_history_id'] = $producthistory[0]['id'];
                $producthistorydetail = $this->modelProductHistoryDetail->create($data);

            } else 
            {

                $productHistoryData['user_id'] = auth()->id();
                
                $productHistoryData['product_id'] = $product->id;
                
                $productHistory = $this->modelProductHistory->create($productHistoryData);
                /* 
                * create product history detail
                */
                $data['product_history_id'] = $productHistory->id;
                $productHistoryDetail = $this->modelProductHistoryDetail->create($data);

            }

            return redirect()
                ->route('products.show', ['product' => $product->id])
                ->with('msg', $msg);
        } catch (\Exception $e) {
            \Log::error($e);
        }

        $error = 'Something went wrong.';

        return redirect()
            ->route('products.index')
            ->with('error', $error);
    }

    public function destroy($id)
    {
        $product = $this->modelProduct->findOrFail($id);
        $msg = '';

        try {
            $product->delete();
            $msg = 'Delete Success';
            return redirect()
            ->route('products.index')
            ->with('msg',$msg)
            ;
        } catch (\Exception $e) {
            \Log::error($e);
            
        }
        $error = 'Some thing went wrong. delete fail';
        return redirect()
            ->route('products.index')
            ->with('error',$error)
            ;
    }
}
