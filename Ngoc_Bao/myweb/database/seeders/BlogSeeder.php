<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\User;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::truncate();
        $data = [];

        $faker = \Faker\Factory::create();

        $users = User::all();

        for ($i = 0; $i < 100; $i++) {
            $data[] = [
                'title' => $faker->text(20),
                'user_id' => $users->random()->id,
                'content' => $faker->text(50,200),
                'image' => $faker->imageUrl($width = 640, $height = 480),
            ];
        }
        Blog::insert($data);
    }
}
