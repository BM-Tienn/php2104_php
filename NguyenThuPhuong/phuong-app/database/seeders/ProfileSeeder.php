<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\User;

class ProfileSeeder extends Seeder
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
                'phone' => $faker->phoneNumber,
                'address' => $faker->city(),
                'age' => rand(18, 30),
                'sex' => rand(0, 1),
                'user_id' => $user->id,
            ];
        }

       Profile::insert($data);
    }
}
