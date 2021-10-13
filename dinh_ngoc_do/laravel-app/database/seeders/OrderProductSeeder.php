<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderProduct;
use App\Models\Product;

class OrderProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OrderProduct::truncate();
        $orders = Order::all();
        $products = Product::all();

        $data = [];

        $faker = \Faker\Factory::create();

        foreach ($orders as $order) {
            $data[] = [
                'order_id' => $order->id,
                'product_id' => $products->random()->id,
                'quantity' => rand(1, 20),
            ];
            
            $data[] = [
                'order_id' => $order->id,
                'product_id' => $products->random()->id,
                'quantity' => rand(1, 20),
            ];
        }

        OrderProduct::insert($data);
    }
}
