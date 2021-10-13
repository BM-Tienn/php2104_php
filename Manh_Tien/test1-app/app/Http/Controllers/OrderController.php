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
        
        $productId = (int) $request->product_id;
        $quantity = (int) $request->quantity;
        $existFlg = false;

        if (session('cart')) {
            $data['cart'] = session('cart');

            foreach ($data['cart'] as $key => $value) {
                if ($productId == $value['id']) {
                    $data['cart'][$key]['quantity'] += $quantity;
                    $existFlg = true;
                }
            }

            if (!$existFlg) {
                $data['cart'][] = [
                    'id' => $request->product_id,
                    'quantity' => $request->quantity
                ];
            }
        } else {
            $data = [
                'cart' => [
                    [
                        'id' => $request->product_id,
                        'quantity' => $request->quantity
                    ],
                ],
            ];
        }

        session($data);

        return json_encode($data);
    }

    public function removeDataFromSession(Request $request)
    {
        $productId = (int) $request->product_id;
        $cartData = session('cart');

        foreach ($cartData as $key => $productData) {
            if ($productData['id'] == $productId) {
                unset($cartData[$key]);
            }
        }

        if (is_null($cartData)) {
            session()->forget('cart');

            return json_encode([]);
        }

        $request->session()->forget('cart');
        session(['cart' => $cartData]);

        return json_encode(['cart' => $cartData]);
    }
    
    public function orderList()
    {
        $cartData = session('cart');
        $cartData = collect($cartData);

        $productData = $cartData->pluck('quantity', 'id')->toArray();
        $productIds = $cartData->pluck('id');

        $products = $this->productModel->whereIn('id', $productIds)->get();

        return view('my-theme-page.cart-ms', [
            'products' => $products,
            'productData' => $productData,
        ]);
    }
}