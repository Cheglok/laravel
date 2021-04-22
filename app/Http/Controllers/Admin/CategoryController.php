<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCategory;
use App\Http\Requests\UpdateCategory;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

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
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(CreateCategory $request)
    {
        $category = Category::create($request->validated());
        if ($category) {
            return redirect()->route('admin.categories.index')
                ->with('success', __('messages.admin.categories.create.success'));
        }
        return back()->with('error', __('messages.admin.categories.create.fail'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
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
     * @param UpdateCategory $request
     * @param Category $category
     * @return RedirectResponse
     */
    public function update(UpdateCategory $request, Category $category)
    {
        $category = $category->fill($request->validated());
        if ($category->save()) {
            return redirect()->route('admin.categories.index')
                ->with('success', __('messages.admin.categories.update.success'));
        }
        return back()->with('error', __('messages.admin.categories.update.fail'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Category $category)
    {
        $status = $category->delete();
        if ($status) {
            return redirect()->route('admin.categories.index')
                ->with('success', __('messages.admin.categories.delete.success'));
        }
        return back()->with('error', __('messages.admin.categories.delete.fail'));
    }
}
