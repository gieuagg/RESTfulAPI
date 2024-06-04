<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{

    public function run()
    {

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            courses::create([
                'title' => $faker->sentence,
                'status' => $faker->paragraph,
            ]);
        }
    }
}
