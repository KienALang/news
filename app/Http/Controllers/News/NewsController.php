<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param News $news News
     *
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        try {
            return view('news.categories.detail', compact('news'));
        } catch (Exception $e) {
            return redirect()->route('news.index')
                ->with('message', 'Error this file');
        }
    }
}
