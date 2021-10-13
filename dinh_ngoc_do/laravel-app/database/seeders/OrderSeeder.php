<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;
use App\Models\User;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::truncate();
        $users = User::all();

        $data = [];

        $faker = \Faker\Factory::create();

        foreach ($users as $user) {
            $data[] = [
                'name' => $faker->name,
                'user_id' => $user->id,
                'total_price' => rand(10000, 1000000),
                'address' => $faker->address,
            ];
        }

        Order::insert($data);
    }
}
