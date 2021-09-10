<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();

        $data = [];

        $faker = \Faker\Factory::create();

        for ($j = 0; $j < 10; $j++) {

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
                'image'=>$faker->imageUrl($width = 640, $height = 480),
                'nhan_vien_id'=>rand(1,5),
                'posting_time'=>$faker->date($format = 'Y-m-d', $max = 'now'),
            ];
        }
        DB::table('products')->insert($data);
    }
}