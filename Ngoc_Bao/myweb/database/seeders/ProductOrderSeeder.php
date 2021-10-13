<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use App\Models\ProductOrder;
use Illuminate\Database\Seeder;

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
                'quantity' => rand(1,5),
            ];
            $data[] = [
                'order_id' => $order->id,
                'product_id' => $products->random()->id,
                'quantity' => rand(1,5),
            ];
        }
        ProductOrder::insert($data);
    }
}
