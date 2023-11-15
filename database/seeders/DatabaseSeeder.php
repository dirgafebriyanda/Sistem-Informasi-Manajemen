<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void 
     */
    public function run()
    {
        User::create([
            'name' => 'Dirga Febriyanda',
            'username' => 'dirgafebriyanda',
            'email' => 'dirgafebriyanda12@gmail.com',
            'password' => bcrypt('password')
        ]);

        Category::create([
            'name' => 'Blog',
            'slug' => 'blog'
        ]);
        Category::create([
            'name' => 'Berita',
            'slug' => 'berita'
        ]);
       

        Post::factory(11)->create();

    }
}
