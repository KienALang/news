<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Category $cat){
        $this->cat = $cat;
    }

    public function index()
    {
<<<<<<< HEAD
        $categories = $this->cat->getItems();
        // dd($categories);
        return view('admin/pages/categories/index', compact('categories'));
=======
        $categories = Category::orderBy('updated_at', config('define.dir_desc'))
            ->paginate(config('define.category.limit_rows'));
        return view('admin.pages.categories.index', compact('categories'));
>>>>>>> 05ea5c941a8b911bb760a2125b7237fe080dee8a
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function edit(Category $category)
    {
        return view('admin.pages.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        try {
            $category->name = $request->name;
            $category->save();
            return redirect() ->route('admin.categories.index');
        } catch (Exception $e) {
            printf($e);
            return redirect() ->route('admin.categories.edit', $category->id)
                ->with('message', 'Name Error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        try {
            $category->films()->delete();
            $category->delete();
            return redirect()->route('admin.categories.index')
                ->with('message', 'Delete success!');
        } catch (Exception $e) {
            return redirect()->route('admin.categories.index')
                ->with('message', 'Delete failed!');
        }
    }
}
