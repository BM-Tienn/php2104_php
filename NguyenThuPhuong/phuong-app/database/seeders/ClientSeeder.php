<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Str;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('client')->truncate();

        $data = [];

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'user' => $faker->userName(),
                'password' => $faker->password(),
                'first_name' => $faker->firstName(),
                'age' => $faker->date(),
                'gender' => $faker->title($gender ='male'|'female'),
                'phone' => $faker->e164PhoneNumber(),
                'email' => $faker->freeEmail(),
                'address' => $faker->city()
            ];
        }

        DB::table('client')->insert($data);
    }
}
