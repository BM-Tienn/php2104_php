<?php

namespace Database\Seeders;

use DB;

use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shop_products')->truncate();
        
        $data = [
            [
                'id' => 1 ,
                'name' => 'Tata-Salt',
                'price' => 200.00,
                'price_sale' => 180.00,
                'image' => 'Tata-Salt.jpg',
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'CATEGORIES',
            ],

            [
                'id' => 2 ,
                'name' => 'Fortune-Sunflower',
                'image' => 'Fortune-Sunflower-2.jpg',
                'price' => 100.00,
                'price_sale' => 50.00,
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'CATEGORIES',
            ],

            [
                'id' => 3 ,
                'name' => 'Aashirvaad-Atta',
                'image' => 'Aashirvaad-Atta.jpg',
                'price' => 250.00,
                'price_sale' => 150.00,
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'CATEGORIES',
            ],

        ];

        DB::table('shop_products')->insert($data);
    }
}