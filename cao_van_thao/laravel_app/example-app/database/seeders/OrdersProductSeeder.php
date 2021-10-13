<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrdersProduct;

class OrdersProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrdersProduct::truncate();

        $data = [];
        $faker = \Faker\Factory::create();
        
        $orders = Order::all();
        $products = Product::all();

        foreach ( $orders as $order ) {
            $data[] = [
                'order_id' => $order->id,
                'product_id' => $products->random()->id,//lấy ngẫu nhiên 1 products 'player_id' => $faker->randomElement(App\Player::all(['id'])),
                'quantity' => rand(1, 5),
            ];
            $data[] = [
                'order_id' => $order->id,
                'product_id' => $products->random()->id,
                'quantity' => rand(1, 5),
            ];
        }
        OrdersProduct::insert($data);
    }
}