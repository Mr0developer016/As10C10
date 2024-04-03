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
            'user_id' => factory(App\User::class),
            'category_id' => factory(App\Category::class),
            'title' => $faker->sentence(),
            'content' => $faker->paragraph(),
            'view_count' => $faker->numberBetween(0, 100),
            'like_count' => $faker->numberBetween(0, 50),
            'published_at' => $faker->dateTimeThisMonth(-1),
        ];
    }
}
