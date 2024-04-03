<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
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
        'post_id' => factory(App\Post::class),
        'content' => $faker->paragraph(),
        'like_count' => $faker->numberBetween(0, 10),
        ];
    }
}
