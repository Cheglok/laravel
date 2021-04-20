<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
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
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> ['required']
        ]);
        $data = $request->only(['category_id', 'title', 'text', 'source_id']);
        $data['slug'] = Str::slug($data['title']);
        $news = News::create($data);
        if($news){
            return redirect()->route('admin.news.index')
                ->with('success', 'Новость успешно добавилась');
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
     * @param $news
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', [
            'news'=>$news
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param News $news
     * @return RedirectResponse
     */
    public function update(Request $request, News $news)
    {
        $data = $request->all();
        $status = $news->fill($data)->save();
        if($status){
            return redirect()->route('admin.news.index')
                ->with('success', "Новость успешно обновлена");
        }
        return back()->with('error', "Не удалось изменить новость");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $status = $news->delete();
        if($status){
            return back()->with('success', "Новость c id {$id} успешно удалена");
        }
        return back()->with('error', "не удалось удалить запись с id = {$id}");
    }
}
