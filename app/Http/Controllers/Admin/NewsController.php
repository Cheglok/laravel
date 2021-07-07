<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateNews;
use App\Http\Requests\UpdateNews;
use App\Models\Category;
use App\Models\News;
use App\Models\Source;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $news = News::with('source')
            ->paginate(10);

        return view('admin.news.index', [
            'newsList' => $news
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $sources = Source::all();
        return view('admin.news.create', [
            'categories' => $categories,
            'sources' => $sources
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(CreateNews $request)
    {
        $data = $request->validated();
        $data['slug'] = Str::slug($data['title']);
        $news = News::create($data);
        if($news){
            return redirect()->route('admin.news.index')
                ->with('success', __('messages.admin.news.create.success'));
        }
        return back()->with('error', trans('messages.admin.news.create.fail'));
    }

    /**
     * Display the specified resource.
     *
     * @param News $news
     * @return void
     */
    public function show(News $news  )
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $news
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(News $news)
    {
        $categories = Category::all();
        $sources = Source::all();
        return view('admin.news.edit', [
            'news'=>$news,
            'categories' => $categories,
            'sources' => $sources
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateNews $request
     * @param News $news
     * @return RedirectResponse
     */
    public function update (UpdateNews $request, News $news)
    {
        $news = $news->fill($request->validated());
        $news->slug = Str::slug($news->title);
        $news->category_id = $request->validated()['category_id'];
        $news->source_id = $request->validated()['source_id'];
        if($news->save()){
            return redirect()->route('admin.news.index')
                ->with('success', __('messages.admin.news.update.success'));
        }
        return back()->with('error', __('messages.admin.news.update.fail'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param News $news
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(News $news)
    {
        $status = $news->delete();
        if($status){
            return back()->with('success', __('messages.admin.news.delete.success'));
        }
        return back()->with('error',  __('messages.admin.news.delete.fail'));
    }
}
