<?php

use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardGalleryController;
use App\Http\Controllers\GaleriController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;

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

Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');
Route::get('/gallery/{id}', [GaleriController::class, 'show'])->name('gallery.show');
Route::get('/gallery/{id}/download', [GaleriController::class, 'download'])->name('gallery.download');

Route::get('/layanan', function () {
    return view('service', [
        "active" => "layanan",
        "title" => "Bengkel Sport Kreatif - Layanan"
    ]);
});

Route::get('/', function () {
    return view('home', [
        "active" => "beanda",
        "title" => "Bengkel Sport Kreatif"
    ]);
});
Route::get('/testimoni', function () {
    return view('testimoni', [
        "active" => "testimoni",
        "title" => "Bengkel Sport Kreatif - Testimoni"
    ]);
});

Route::get('/kritik-dan-saran', function () {
    return view('kritikdansaran', [
        "active" => "kritik",
        "title" => " Bengkel Sport Kreatif - Kritik dan Saran"
    ]);
});

Route::get('/tentang', function () {
    return view('about', [
        "active" => "tentang",
        "title" => "Bengkel Sport Kreatif - Tentang"
    ]);
});

Route::get('/blog-dan-berita', [PostController::class, 'index']);
Route::get('/blog-dan-berita/{post:slug}', [PostController::class, 'show']);

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
        'title' => "Ditulis Oleh : $author->name",
        "active" => "blog",
        'posts' => $author->posts->load(['author', 'category'])
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('/dashboard/categories/checkSlug', [DashboardCategoryController::class, 'checkSlug'])->middleware('admin');
Route::resource('/dashboard/categories', DashboardCategoryController::class)->except('show')->middleware('admin');

Route::resource('/dashboard/services', ServiceController::class)->middleware('auth');
Route::resource('/dashboard/galleries', DashboardGalleryController::class)->middleware('auth');

Route::resource('/dashboard/users', UserController::class)->middleware('admin');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth');;
