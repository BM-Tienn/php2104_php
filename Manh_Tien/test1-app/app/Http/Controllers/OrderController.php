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
}