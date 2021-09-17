<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(10)->create();

        $this->call([
            ProductsSeeder::class,
            CategoriesSeeder::class,
            ProfileSeeder::class,
            OrderSeeder::class,
            OrderProductSeeder::class,
        ]);
    }
}
