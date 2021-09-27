<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            OrderSeeder::class,
            ProductOrderSeeder::class,
            CategorySeeder::class,
            ProductsSeeder::class,
            ProfileSeeder::class,
            BlogSeeder::class,
        ]);
    }
}
