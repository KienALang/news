<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;

class IndexController extends Controller
{
    public function __construct(News $anew)
    {
    	$this->anew = $anew;
    }

    public function index()
    {
    	$listNews = $this->anew->getItems();
    	$latestNews = $this->anew->getLatestNews();
    	return view('news.index.index', compact('listNews', 'latestNews'));
    }
}
