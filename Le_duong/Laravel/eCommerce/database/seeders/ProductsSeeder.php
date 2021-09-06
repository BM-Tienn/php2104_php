<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
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
        $faker=\Faker\Factory::create();
        for ($i = 0; $i < 20; $i++) {
            $data[] = [
                'name' => $faker->name,
                'rate' => rand(1,5),
                'price' => rand(100,300),
                'color' => $faker->colorName,
                'image' => $faker->imageUrl($width=640,$height=480),
                'itended' => $faker->word(),
                'code' => $faker->word(),
                'brand' => $faker->word(),
                'description_short' => $faker->text($short = 300),
                'description_long' => $faker->text(),
                'user_id' => 1,
                'categories_id' => 1,
            ];
        }
        DB::table('products')->insert($data);
    }
}
