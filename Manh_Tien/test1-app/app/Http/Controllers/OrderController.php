<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\ShopProduct;
use App\Models\Order;
use App\Models\OrderProducts;

class OrderController extends Controller
{
    protected $categoryModel;
    protected $productModel;
    protected $orderModel;
    protected $productOrderModel;


    public function __construct(
        Category $category, 
        ShopProduct $product,
        Order $order,
        OrderProducts $productOrder
    ) {
        $this->categoryModel = $category;
        $this->productModel = $product;
        $this->orderModel = $order;
        $this->productOrderModel = $productOrder;
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

    public function update(Request $request)
    {
        $productId = (int) $request->product_id;
        $quantity = (int) $request->quantity;

        if (session('cart')) {
            $data['cart'] = session('cart');

            foreach ($data['cart'] as $key => $value) {
                if ($productId == $value['id']) {
                    $data['cart'][$key]['quantity'] = $quantity;
                }
            }
            session($data);

            return json_encode($data);
        }

        return json_encode(['status' => false]);
    }

    public function checkout()
    {
        $data = session('cart');

        return view('my-theme-page.checkout');
    }

    public function purchase(Request $request)
    {
        $input = $request->only([
            'name',
            'phone',
            'email',
            'address',
        ]);

        $orderSession = session('cart');

        $totalPrice = 100;
        $code = 'JHGF100';

        $orderData = [
            'name' => $input['name'],
            'phone' => $input['phone'],
            // 'email' => $input['phone'],
            'address' => $input['address'],
            'total_price' => $totalPrice,
            'code' => $code,
        ];

        try {
            $order = $this->orderModel->create($orderData);

            $orderId = $order->id;

            $productOrderData = [];

            foreach ($orderSession as $product) {
                $productId = $product['id'];
                $productRecord = $this->productModel->find($productId);

                $productOrderData[] = [
                    'order_id' => $orderId,
                    'product_id' => $productId,
                    'price' => (int) $productRecord->price,
                    'sale_off' => $productRecord->sale_off,
                    'quantity' => $product['quantity'],
                ];
            }

            $this->productOrderModel->insert($productOrderData);
        } catch (\Exception $e) {
            \Log::error($e);
        }

        return json_encode(['status' => true]);
    }   
}