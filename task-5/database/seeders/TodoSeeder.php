<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ToDo;
use Faker\Factory as Faker;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            ToDo::create([
                'title' => $faker->sentence(3), // Random title
                'description' => $faker->paragraph(2), // Random description
                'is_completed' => $faker->boolean() // Random completion status
            ]);
        }
    }
}
