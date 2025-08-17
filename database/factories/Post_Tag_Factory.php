<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $model = Tag::class;
        return [
            "id" => str::uuid()->toString(), // Generate a UUID for the id
            'tag_id' => Tag::factory(),
            'post_id' => Post::factory()
        ];
    }
}
