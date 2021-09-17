<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\profile;
use App\Models\User;

class ProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        profile::truncate();

        $data = [];

        $faker = \Faker\Factory::create();
        
        $users = User::all();

        foreach ( $users as $user ) {
            $data[] = [
                'user_id' => $user->id,
                'name' => $faker->name,
                'phone' => $faker->e164PhoneNumber,
                'address' => $faker->city,
                'age' => rand(18, 30),
            ];
        }
        profile::insert($data);
    }
}