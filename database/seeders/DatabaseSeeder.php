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
        User::create(
    [
        'name' => 'Dirga Febriyanda',
        'username' => 'dirga1202',
        'jekel' => 'laki-laki',
        'email' => 'dirgafebriyanda12@gmail.com',
        'password' => bcrypt('password'),
        'is_admin' => '1',
    ]);
        User::create(
    [
        'name' => 'Sonia Larasati',
        'username' => 'sonia2107',
        'jekel' => 'perempuan',
        'email' => 'sonialarasati21@gmail.com',
        'password' => bcrypt('password'),
        'is_admin' => '0',
    ]);
        User::create(
    [
        'name' => 'Faisal Noor',
        'username' => 'faisalnoor',
        'jekel' => 'laki-laki',
        'email' => 'faisalnoor@gmail.com',
        'password' => bcrypt('password'),
        'is_admin' => '0',
    ]);


        Category::create([
            'name' => 'Berita Olahraga',
            'slug' => 'berita-olahraga',
        ]);

        Category::create([
            'name' => 'Tips dan Trik',
            'slug' => 'tips-dan-trik',
        ]);

        Category::create([
            'name' => 'Kesehatan',
            'slug' => 'kesehatan',
        ]);

        Category::create([
            'name' => 'Teknologi',
            'slug' => 'teknologi',
        ]);

        Category::create([
            'name' => 'Hiburan',
            'slug' => 'hiburan',
        ]);

        Category::create([
            'name' => 'Bisnis',
            'slug' => 'bisnis',
        ]);

        Category::create([
            'name' => 'Fashion',
            'slug' => 'fashion',
        ]);

        Category::create([
            'name' => 'Pendidikan',
            'slug' => 'pendidikan',
        ]);

        Category::create([
            'name' => 'Seni dan Budaya',
            'slug' => 'seni-dan-budaya',
        ]);

        Category::create([
            'name' => 'Wisata',
            'slug' => 'wisata',
        ]);

        Post::factory(20)->create();
    }
}
