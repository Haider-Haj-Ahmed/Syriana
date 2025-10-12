<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'caption' => fake()->paragraph(),
            'media_path' => null,
            'media_type' => null,
            'rating' => fake()->optional()->numberBetween(1, 5),
            'location' => fake()->city(),
        ];
    }
}
