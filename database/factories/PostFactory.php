<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'blogTitle' => fake()->sentence(mt_rand(2, 8)),
            'slug' => fake()->slug(),
            'content' => fake()->paragraph(mt_rand(5, 10)),
            'user_id' => mt_rand(4, 5),
            'category_id' => mt_rand(1, 2)
        ];
    }
}
