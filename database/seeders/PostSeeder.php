<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\Writer;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Post::create([
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
                'views' => $faker->numberBetween(10, 100),
                'category_id' => Category::inRandomOrder()->first()->id,
                'writer_id' => Writer::inRandomOrder()->first()->id,
            ]);
        }
    }
}

