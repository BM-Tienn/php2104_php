<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        $categories = Category::all();

        $data = [];

        $faker = \Faker\Factory::create();

        for ($j = 0; $j < 100; $j++) {

            $data[] = [
                'name' => $faker->name,
                'price' => rand(100, 500),
                'quantity' => rand(1, 10),
                'start_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'category_id' => rand(0, 5),
                'user_id' => rand(0, 5),
                'status' => rand(1, 3),
                'rate' => rand(100, 1000),
                'start_sale_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'image'=>$faker->imageUrl($width = 250, $height = 300),
                'nhan_vien_id'=>rand(1,5),
                'posting_time'=>$faker->date($format = 'Y-m-d', $max = 'now'),
                'sale_off'=>rand(0, 30),
                'price_off'=>rand(300, 500),
                'is_public'=>rand(1, 4),
                'categories_id'=>rand(1, 4),
            ];
        }
       Product::insert($data);
    }
}