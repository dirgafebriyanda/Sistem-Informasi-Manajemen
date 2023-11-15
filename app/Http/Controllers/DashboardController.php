<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Post;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
public function dashboard()
{
    $postsCount = Post::count();
    $usersCount = User::count();
    $galeriesCount = Gallery::count();
    $servicesCount = Service::count();
    $categoriesCount = Category::count();
    return view('dashboard.index', [
            'title' => 'Dashboard',
            'active' => 'dashboard'
        ],
     compact('postsCount','usersCount', 'galeriesCount' , 'servicesCount' , 'categoriesCount'));
}

}
