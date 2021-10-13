<?php

namespace Database\Seeders;
use App\Models\Profile;
use App\Models\User;
use App\Models\Order;

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::truncate();
        $users = User::all();

        $data = [];

        $faker = \Faker\Factory::create();

        foreach ($users as $user) {
            $data[] = [
                'user_id' => $user->id,
                'tortal_price' => 25,
                'order_date' => $faker->date,
            ];
        }

        Order::insert($data);
    }
}
