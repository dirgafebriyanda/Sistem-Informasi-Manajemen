<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
            'title' => $this->faker->sentence(mt_rand(2, 8)),
'slug' => $this->faker->slug(),
'excerpt' => $this->faker->sentence(mt_rand(5, 15)), // Menggunakan sentence untuk excerpt.
'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))->map(fn ($p) => "<p>$p</p>")->implode(''),
'user_id' => User::inRandomOrder()->first()->id, // Mengambil pengguna secara acak.
'category_id' => Category::inRandomOrder()->first()->id, // Mengambil kategori secara acak.

        ];
    }
}
