<?php

use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\ServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/page-not-found', function () {
    return view('errors.404',);
});

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/layanan-kami', function () {
    return view('service', [
        "active" => "service",
        "title" => "service"
    ]);
});

Route::get('/tentang-kami', function () {
    return view('about', [
        "active" => "about",
        "title" => "About",
        "name" => "Dirga Febriyanda",
        "email" => "dirgafebriynda42@gmail.com",
        "image" => "dirga.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post categoies',
        "active" => "categories",
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post by category : $category->name",
        "active" => "categories",
        'posts' => $category->posts->load(['author', 'category'])
    ]);
});
Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Post by author : $author->name",
        "active" => "posts",
        'posts' => $author->posts->load(['author', 'category'])
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashbord',
        'active' => 'dashboard'
    ]);
})->middleware('auth');


Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('/dashboard/categories/checkSlug', [DashboardCategoryController::class, 'checkSlug'])->middleware('admin');
Route::resource('/dashboard/categories', DashboardCategoryController::class)->except('show')->middleware('admin');

Route::resource('/dashboard/services', ServiceController::class)->middleware('auth');
Route::resource('/dashboard/galleries', GalleryController::class)->middleware('auth');;
