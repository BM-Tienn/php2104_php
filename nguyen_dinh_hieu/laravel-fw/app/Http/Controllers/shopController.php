<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;

class ShopController extends Controller
{
    public function shop()
    {
        // $profile = User::first()
        //     ->profile;
        // dd($profile);
        $products = Product::where('id','>', 0)
            ->orderByDESC('price')
            ->paginate(config('product.paginate'));
    
        return view('mypage.shop', ['products' => $products]);
    }
}
