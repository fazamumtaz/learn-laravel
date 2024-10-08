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
            'content' => collect(fake()->paragraphs(mt_rand(3, 7)))
                ->map(function ($p) {
                    return "<p>$p</p>";
                })
                ->implode(''),
            'user_id' => 11,
            'category_id' => mt_rand(1, 2)
        ];
    }
}
