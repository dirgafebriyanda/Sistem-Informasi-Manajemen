<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
   public function index()
{
    $title = '';
    if (request('category')) {
        $category = Category::firstWhere('slug', request('category'));
        $title = ' Kategori ' . $category->name;
    }
    if (request('author')) {
        $author = User::firstWhere('username', request('author'));
        $title = ' Oleh ' . $author->name;
    }

    $posts = Post::latest()
        ->whereNotNull('published_at') // Hanya ambil data yang memiliki published_at
        ->filter(request(['search', 'category', 'author']))
        ->paginate(7)
        ->withQueryString();
    $categories = Category::all();

    return view('posts', [
        'title' => 'Bengkel Sport Kreatif - Blog & Berita' . $title,
        'active' => 'blog',
        'posts' => $posts,
        'categories' => $categories,
    ]);
}


    public function show(Post $post)
    {
        $posts = Post::All();
        $categories = Category::orderBy('name')->get();
        return view('post', [
            'title' => 'Blog & Berita',
            'active' => 'blog',
            'post' => $post,
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }
}
