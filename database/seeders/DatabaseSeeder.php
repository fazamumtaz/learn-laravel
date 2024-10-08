<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Factory
        // User::factory(5)->create();
        Post::factory(8)->create();

        //Manual
        // Category::create([
        //     'name' => 'Productivity',
        //     'slug' => 'productivity'
        // ]);
        // Category::create([
        //     'name' => 'Programming',
        //     'slug' => 'programming'
        // ]);
    }
}
