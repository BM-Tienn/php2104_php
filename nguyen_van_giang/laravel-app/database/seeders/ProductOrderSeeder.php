<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Order;
use App\Models\ProductOrder;
use App\Models\Product;


class ProductOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductOrder::truncate();
        $orders = Order::all();

        $data = [];

        $faker = \Faker\Factory::create();

        $products = Product::all();

        foreach ($orders as $order) {
            $data[] = [
                'order_id' => $order->id,
                'product_id' => $products->random()->id,
                'quantity' => rand(1, 5),
            ];

            $data[] = [
                'order_id' => $order->id,
                'product_id' => $products->random()->id,
                'quantity' => rand(1, 5),
            ];
        }

        ProductOrder::insert($data);
    }
}
