<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Post;
use App\Models\Review;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
public function dashboard()
{
    if (Auth::check()) {
    $userID = Auth::id();
    $postsCount = Post::where('user_id', $userID)->count();
} else {
    // User tidak terautentikasi
    $postsCount = 0; // Atau atur ke nilai default sesuai kebutuhan
}
    $usersCount = User::count();
    $galeriesCount = Gallery::count();
    $servicesCount = Service::count();
    $categoriesCount = Category::count();
    $reviewsCount = Review::count();
    
    return view('dashboard.index', [
            'title' => 'Dashboard',
            'active' => 'dashboard'
        ],
     compact('postsCount','usersCount', 'galeriesCount' , 'servicesCount' , 'categoriesCount', 'reviewsCount'));
}

}
