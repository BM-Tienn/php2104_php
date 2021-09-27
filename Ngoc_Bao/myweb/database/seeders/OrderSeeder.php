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

        /* $table->id();
            $table->string('name')->nullable();
            $table->bigInteger('user_id');
            $table->bigInteger('total_price')->nullable();
            $table->text('address');
        */

        foreach ($users as $user) {
            $data[] = [
                'name' => $faker->name,
                'user_id' => $user->id,
                'total_price' => rand(180,250),
                'address' => $faker->city,
            ];
        }

        Order::insert($data);

    }
}
