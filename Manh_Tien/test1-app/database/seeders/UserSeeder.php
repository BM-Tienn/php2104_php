<?php

namespace Database\Seeders;

use DB;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
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
                'name' => 'Sampann-Toor-Dal',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'image' => 'images/pf4.png',
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'CATEGORIES',
            ],

            [
                'id' => 2 ,
                'name' => 'Parryss-sugar',
                'image' => 'images/bv3.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'CATEGORIES',
            ],

            [
                'id' => 3 ,
                'name' => 'Saffola-gold',
                'image' => 'images/16.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'CATEGORIES',
            ],

            [
                'id' => 4 ,
                'name' => 'Sampann-toor-dal',
                'image' => 'images/hh4.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'CATEGORIES',
            ],

            [
                'id' => 5 ,
                'name' => 'Saffola-gold',
                'image' => 'images/pc6.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'CATEGORIES',
            ],

            [
                'id' => 6 ,
                'name' => 'Saffola-gold',
                'image' => 'images/gu4.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'CATEGORIES',
            ],

            [
                'id' => 7 ,
                'name' => 'Saffola-gold',
                'image' => 'images/5.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'CATEGORIES',
            ],

            [
                'id' => 8 ,
                'name' => 'Saffola-gold',
                'image' => 'images/6.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'CATEGORIES',
            ],

            [
                'id' => 9 ,
                'name' => 'Saffola-gold',
                'image' => 'images/16.png',
                'price' => rand(250,350),
                'price_sale' => rand(150,250),
                'description' => 'Fruits And VegetablesFruits And VegetablesFruits And Vegetables',
                'quantity' => rand(10,100),
                'status' => rand(0, 1),
                'classify' => 'CATEGORIES',
            ],

        ];

        DB::table('shop_products')->insert($data);
    }
}