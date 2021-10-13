<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
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
                'name' => 'Fruits',
                'image' => 'category-1.jpg',
            ],
            [
                'name' => 'Vegetables',
                'image' => 'category-2.jpg',
            ],
            [
                'name' => 'Juices',
                'image' => 'category-3.jpg',
            ],
            [
                'name' => 'Dried',
                'image' => 'category-4.jpg',
            ],
        ];

        DB::table('categories')->insert($data);
    }
}
