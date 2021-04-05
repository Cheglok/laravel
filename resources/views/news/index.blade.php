@extends('layouts.main2')
@section('content')
    <section id="intro" class="section intro">
        <div class="container">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h3>Лента новостей</h3>
                <p>Читайте наши интересные новости</p>
            </div>
            @forelse ($newsList as $key => $news)
                <article class="post-preview text-center">
                    <a href="{{route('news.show', $key)}}">
                        <h2 class="post-title">{{$news['title']}}</h2>

                        <h3 class="post-subtitle">кратко {{$news['text']}}</h3>

                    </a>
                    <p class="post-meta">Опубликовал Админ
                        {{now()}} &middot;

                    </p>
                </article>
                <hr>
            @empty
                <h2>Новостей нет</h2>
            @endforelse
        </div>
        <div class="clearfix">
            <a class="btn btn-primary float-right" href="/news">Показать все посты &rarr;</a>
        </div>
    </section>
@endsection


