<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $categories = Category::where('is_visible', true)->paginate(5);

        return view('admin.news.categories.index',
            ['newsCategories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->only(['title', 'description', 'is_visible']);
        $category = Category::create($data);
        if($category) {
            return redirect()->route('admin.categories.index')
                ->with('success', 'Запись успешно добавилась');
        }
        return back()->with('error', 'Не удалось добавить запись');
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.news.categories.edit', [
            'category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Category $category
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Category $category)
    {
        $data = $request->only(['title', 'description', 'is_visible']);
        $status = $category->fill($data)->save();
        if($status) {
            return redirect()->route('admin.categories.index')
                ->with('success', 'Запись успешно изменилась');
        }
        return back()->with('error', 'Не удалось сохранить запись');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id)
    {
        $category = Category::findOrFail($id);
        $status = $category->delete();
        if($status) {
            return redirect()->route('admin.categories.index')
                ->with('success', 'Запись с id = '. $id . ' успешно удалена');
        }
        return back()->with('error', 'Не удалось удалить запись с id = '. $id);
    }
}
