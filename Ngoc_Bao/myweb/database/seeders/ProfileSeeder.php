<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Str;
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
                'address' => $faker->address,
                'age' => rand(18,25),
                'sex' => rand(0,1),
                'user_id' => $user->id,
            ];
        }

        Profile::insert($data);
    }
}
