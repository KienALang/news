<?php

namespace App\Http\Controllers\News;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use DB;

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
    // Search function
    public function search(Request $request)
    {
        //$query = $request->input('key-words'));
        $news = News::with(['category'])
            ->select('*')
            ->where(DB::raw("CONCAT(title, ' ', preview, ' ', detail, ' ')")
                , 'LIKE', "%" . request('key-words') . "%")
            ->get();
        $isSearchView = true;

        return view('news.index.index', compact('news', 'isSearchView'));
    }
}
