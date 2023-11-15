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
            ->filter(request(['search', 'category', 'author']))
            ->paginate(7)
            ->withQueryString();

        return view('posts', [
            'title' => 'Blog & Berita' . $title,
            'active' => 'blog',
            'posts' => $posts,
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            'title' => 'Blog & Berita',
            'active' => 'blog',
            'post' => $post,
        ]);
    }
}
