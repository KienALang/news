<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Exception;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id', config('define.dir_desc'))
            ->paginate(config('define.category.limit_rows'));
        return view('admin.pages.categories.index', compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.pages.categories.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        try {
            Category::create($request->only('name'));
            $validate = 'Add success';

            return redirect()->route('admin.categories.index')->with('message', $validate);
        } catch (Exception $e) {
            $validate = 'Add fail';

            return redirect()->route('admin.categories.create')->with('message', $validate);
        }
    }

    /**
     * Edit the specified resource from storage.
     *
     * @param  Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.pages.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource from storage.
     *
     * @param  Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        try {
            $category->name = $request->name;
            $category->save();
            return redirect() ->route('admin.categories.index')->with('message', 'Edit success');
        } catch (Exception $e) {
            printf($e);
            return redirect() ->route('admin.categories.edit', $category->id)
                ->with('message', 'Name Error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        try {
            $category->news()->delete();
            $category->delete();
            return redirect()->route('admin.categories.index')
                ->with('message', 'Delete success!');
        } catch (Exception $e) {
            return redirect()->route('admin.categories.index')
                ->with('message', 'Delete failed!');
        }
    }
}
