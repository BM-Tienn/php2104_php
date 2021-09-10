<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        $data = [
            [
                'name' => 'T-Shirts',
                'image' => 'category-1.jpg',
                'is_public' => rand(0, 1),
                'user_id' => rand(1, 20),
            ],

            [
                'name' => 'Jacket',
                'image' => 'category-2.jpg',
                'is_public' => rand(0, 1),
                'user_id' => rand(1, 20),
            ],

            [
                'name' => 'Paint',
                'image' => 'category-3.jpg',
                'is_public' => rand(0, 1),
                'user_id' => rand(1, 20),
            ],

            [
                'name' => 'Shoes',
                'image' => 'category-4.jpg',
                'is_public' => rand(0, 1),
                'user_id' => rand(1, 20),
            ],
        ];

        DB::table('categories')->insert($data);
    }
}
