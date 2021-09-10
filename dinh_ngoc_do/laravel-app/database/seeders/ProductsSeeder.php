<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Carbon\Carbon;

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

        for ($i = 0; $i < 100; $i++) {
            $data[] = [
                'name' => $faker->name,
                'image' => $faker->imageUrl($width = 640, $height = 480),
                'rate' => rand(1, 5),
                'price' => rand(10000, 1000000),
                'quantity' => rand(10, 500),
                'sold_out' => rand(0, 300),
                'start_date' => Carbon::parse('2021-09-05'),
                'start_sale_date' => Carbon::parse('2021-09-06'),
                'sale_off' => rand(0, 30),
                'description' => $faker->text,
                'category_id' => rand(1, 4),
                'user_id' => rand(1, 20),
                'status' => rand(0, 99),
                'is_public' => rand(0, 1),
            ];
        }

        DB::table('products')->insert($data);
    }
}
