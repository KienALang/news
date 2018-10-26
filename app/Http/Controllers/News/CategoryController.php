<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;

class CategoryController extends Controller
{
    public function getListNews($category)
    {
        $allNewsOfCategory = News::where('category_id', $category)
        			->orderBy('id', config('define.dir_desc'))
        			->paginate(config('define.news.limit_rows'));
        return view('news.categories.index', compact('allNewsOfCategory'));
    }
}
