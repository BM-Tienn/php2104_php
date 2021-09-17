<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
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
                 'user_id' => $user->id,
                 'order_date' => $faker->date(),
                 'total_price' => rand(200, 500),
             ];
         }
 
        Order::insert($data); 
    }
}
