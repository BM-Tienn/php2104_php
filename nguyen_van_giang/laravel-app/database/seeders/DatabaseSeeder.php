<?php

namespace Database\Seeders;

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
        User::factory(10)->create(); // create 10 users

        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            ProfileSeeder::class,
            OrderSeeder::class,
            ProductOrderSeeder::class,
        ]);
    }
}
