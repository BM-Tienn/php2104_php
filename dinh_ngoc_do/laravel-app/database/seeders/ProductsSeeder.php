<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
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
        /* DB::table('products')->truncate(); */

        /* $data = [];

        for($i = 0; $i < 25; $i++) {
            $data[] = [
                'name' => 'T-Shirts A',
                'title' => 'Fiding perfect t-shirt A',
                'image' => 'cloth_1.jpg',
                'price' => rand(1, 100),
                'size' => rand(1, 4),
                'description' => 'This is a orange T-Shirts A',
                'category_id' => rand(1, 10),
                'user_id' => rand(1,99),
            ];
            
        } */
        
        $data = [
            [
                'name' => 'T-Shirts A',
                'title' => 'Fiding perfect t-shirt A',
                'image' => 'cloth_1.jpg',
                'price' => rand(1, 100),
                'size' => rand(1, 4),
                'description' => 'This is a orange T-Shirts A',
                'category_id' => rand(1, 3),
                'user_id' => rand(1,99),
            ],
    
            [
                'name' => 'T-Shirts B',
                'title' => 'Fiding perfect t-shirt B',
                'image' => 'cloth_2.jpg',
                'price' => rand(1, 100),
                'size' => rand(1, 4),
                'description' => 'This is a blue T-Shirts B',
                'category_id' => rand(1, 3),
                'user_id' => rand(1,99),
            ],
    
            [
                'name' => 'Shoe A',
                'title' => 'Fiding perfect shoe A',
                'image' => 'shoe_1.jpg',
                'price' => rand(1, 100),
                'size' => rand(1, 4),
                'description' => 'This is a blue shoe A',
                'category_id' => rand(1, 3),
                'user_id' => rand(1,99),
            ],
    
            [
                'name' => 'T-Shirts C',
                'title' => 'Fiding perfect t-shirt C',
                'image' => 'cloth_3.jpg',
                'price' => rand(1, 100),
                'size' => rand(1, 4),
                'description' => 'This is a orange T-Shirts C',
                'category_id' => rand(1, 3),
                'user_id' => rand(1,99),
            ],
        ];

        Product::insert($data);
    }
}
