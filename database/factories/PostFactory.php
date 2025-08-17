<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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

        $model = Post::class;
        return [
            'id' => Str::uuid()->toString(), // Assuming you want to generate a UUID for the id
            'title' => $this->faker->sentence,
            'auther' => $this->faker->name,
            'body' => $this->faker->paragraph,
            'published' => $this->faker->boolean(80), // 80% chance of being true
        ];
    }
}
