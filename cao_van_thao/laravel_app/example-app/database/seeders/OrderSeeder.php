<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Order;

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

        $data = [];

        $faker = \Faker\Factory::create();
        
        $users = User::all();

        foreach ( $users as $user ) {
            $data[] = [
                'name' => $faker->name,
                'user_id' => $user->id,
                'total_price' => rand(200, 500),
                'address' => $faker->city,
            ];
        }
        Order::insert($data);
    }
}

