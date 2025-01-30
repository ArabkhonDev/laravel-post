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
            'user_id'=> random_int(1,26),
            'name' => fake()->sentence(),
            'short_content' => fake()->sentence(7),
            'body' => fake()->paragraph(10),
        ];
    }
}
