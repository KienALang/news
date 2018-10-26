<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Category;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $totalNews = News::get()->count();
        $totalCategories = Category::get()->count();
        $totalUsers = User::get()->count();
        return view('admin.pages.home.index', compact('totalNews', 'totalCategories', 'totalUsers'));
    }
}
