<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        $data = [
            [
                'name' => 'Women',
                'image' => 'women.jpg',
                'quantity' => rand(1,999),
                'is_public' => 1,
            ],

            [
                'name' => 'Children',
                'image' => 'children.jpg',
                'quantity' => rand(1,999),
                'is_public' => 1,
            ],

            [
                'name' => 'Men',
                'image' => 'men.jpg',
                'quantity' => rand(1,999),
                'is_public' => 1,
            ],

        ];

        Category::insert($data);
    }
}
