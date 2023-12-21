<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use App\Models\Post; // Pastikan untuk mengimport model Post jika belum diimport
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'excerpt' => $this->faker->paragraph(mt_rand(5, 15)),
            'body' => $this->faker->paragraphs(mt_rand(5, 10), true),
            'user_id' => User::inRandomOrder()->first()->id,
            'category_id' => Category::inRandomOrder()->first()->id,
        ];
    }
}
