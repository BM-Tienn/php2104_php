<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
        
        Category::insert([

            [
                'name' => 'Men',
                'image' => 'polo-shirt-1.png',
                'is_public' => '1',
            ],
            [
                'name' => 'Women',
                'image' => 'girl-1.png',
                'is_public' => '2',
            ],
            [
                'name' => 'Sports',
                'image' => 'sport-1.png',
                'is_public' => '3',
            ],
            [
                'name' => 'Electronics',
                'image' => 'electronic-1.png',
                'is_public' => '4',
            ],
        ]);
    }
}
