<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\File>
 */
class FileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'path' => fake()->filePath(),
            'extension' => fake()->fileExtension(),
            'mime_type' => fake()->mimeType(),
            'size' => fake()->randomNumber(5, false),
            'fileable_id' => Article::factory(),
            'fileable_type' => function(array $attributes) {
                return Article::find($attributes['fileable_id']);
            },
        ];
    }
}
