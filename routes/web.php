<?php

use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardGalleryController;
use App\Http\Controllers\DashboardReviewController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\Post;
use App\Models\Review;
use App\Models\User;
use App\Http\Controllers\SaranController;

use Illuminate\Support\Facades\Route;
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

Route::get('/test', function () {
    return view('test');
});
Route::get('/page-not-found', function () {
    return view('errors.404');
});
Route::patch('/posts/{post}/update-publishad-at', 'PostController@updatePublishadAt');
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');
Route::get('/gallery/{id}', [GaleriController::class, 'show'])->name('gallery.show');
Route::get('/gallery/{id}/download', [GaleriController::class, 'download'])->name('gallery.download');

Route::get('/layanan', function () {
    return view('service', [
        'active' => 'layanan',
        'title' => 'Bengkel Sport Kreatif - Layanan',
    ]);
});

Route::get('/', function () {
    // Ambil data ulasan dari database
    $reviews = Review::orderByDesc('rating')->get();
    $posts = Post::orderByDesc('id')->get();
    return view('home', [
        'active' => 'beranda',
        'title' => 'Bengkel Sport Kreatif',
        'reviews' => $reviews, // Mengirimkan data ulasan ke tampilan
        'posts' => $posts, // Mengirimkan data ulasan ke tampilan
    ]);
});

Route::get('/tentang-kami', function () {
    return view('about', [
        'active' => 'tentang',
        'title' => 'Bengkel Sport Kreatif - Tentang',
    ]);
});
Route::get('/kebijakan-privasi', function () {
    return view('kebijakan', [
        'active' => 'kebijakan',
        'title' => 'Bengkel Sport Kreatif - Kebijakan Privasi',
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post categoies',
        'active' => 'categories',
        'categories' => Category::all(),
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "Post by category : $category->name",
        'active' => 'categories',
        'posts' => $category->posts->load(['author', 'category']),
    ]);
});
Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Ditulis Oleh : $author->name",
        'active' => 'blog',
        'posts' => $author->posts->load(['author', 'category']),
    ]);
});

Route::get('/register', [RegisterController::class, 'index'])
    ->name('register')
    ->middleware('guest');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/login', [LoginController::class, 'index'])
    ->name('login')
    ->middleware('guest');
    
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('/dashboard/categories/checkSlug', [DashboardCategoryController::class, 'checkSlug'])->middleware('admin');
Route::resource('/dashboard/categories', DashboardCategoryController::class)
    ->except('show');

Route::resource('/dashboard/services', ServiceController::class)->middleware('auth');
Route::resource('/dashboard/galleries', DashboardGalleryController::class)->middleware('auth');

Route::resource('/dashboard/users', DashboardUserController::class);

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::post('/ulasan', [DashboardReviewController::class, 'store']);

Route::resource('dashboard/ulasan', DashboardReviewController::class)->middleware('auth');

Route::resource('dashboard/saran', SaranController::class)->middleware('auth');
Route::get('/kritik-dan-saran', [SaranController::class, 'create'])->name('saran');
Route::post('/kritik-dan-saran', [SaranController::class, 'store'])->name('saran.store');