<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\News;
use Exception;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allNews = News::orderBy('id', config('define.dir_desc'))
            ->paginate(config('define.news.limit_rows'));
        return view('admin.pages.news.index', compact('allNews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.pages.news.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param News $news
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request, News $news)
    {
        $this->validate(request(), [
            'photo' => 'image|mimes:jpg,jpeg,png,gif'
        ]);

        try {
            $news->category_id = $request->category;
            $news->title = $request->title;
            $news->preview = $request->preview;
            $news->detail = $request->detail;

            if ($request->hasFile('photo')) {
                $image = $request->file('photo');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('images');
                $image->move($destinationPath, $name);

                $news->path = 'images/'.$name;
            }

            $news->save();

            $validate = trans('lang.msg.add_success');
        } catch (Exception $e) {
            $validate = trans('lang.msg.add_fail');
        }

        return redirect()->route('admin.news.index')->with('message', $validate);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param News $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        try {
            $news->delete();
            return redirect()->route('admin.news.index')
                ->with('message', 'Delete success!');
        } catch (Exception $e) {
            return redirect()->route('admin.news.index')
                ->with('message', 'Delete failed!');
        }
    }
}
