<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Post;

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
        $title = $this->faker->paragraph(1);

        return [
            'uri' => Str::slug($title),
            'title' => $title,
            'subtitle' => $this->faker->paragraph(1),
            'content' => $this->faker->paragraph(10),
            'author' => 1,
        ];
    }
}
