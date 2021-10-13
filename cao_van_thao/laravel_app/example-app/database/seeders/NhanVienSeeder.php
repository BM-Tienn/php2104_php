<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class NhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nhan_vien')->truncate();

        $data = [];

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'name' => $faker->name,
                'birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'address' => $faker->city,
                'phone' => $faker->e164PhoneNumber,
                'permisson_id' => rand(1, 2),
                'position_id' => rand(1, 2),
            ];
        }

        DB::table('nhan_vien')->insert($data);
    }
}
