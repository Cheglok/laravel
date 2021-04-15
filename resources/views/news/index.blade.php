@extends('layouts.main2')
@section('content')
    <section id="intro" class="section intro">
        <div class="container">
            <div class="col-md-12 text-center">
                <h3>Лента новостей</h3>
                <p>Читайте наши интересные новости</p>
                <hr>
            </div>
            @forelse ($newsList as $news)
                <article class="post-preview text-center">
                    <a href="{{route('news.show', $news->id)}}">
                        <h2 class="post-title">{{$news->title}}</h2>

                        <h3 class="post-subtitle">{{$news->text}}</h3>

                    </a>
                    <p class="post-meta">Опубликовал Админ
                        {{$news->created_at}} &middot;
                        <i>Категория {{$news->category->title}}</i>
                        <b>Источник {{$news->source_title}}</b>
                    </p>
                </article>
                <hr>
            @empty
                <h2>Новостей нет</h2>
            @endforelse
            <div>{{$newsList->links()}}</div>
        </div>
        <div class="clearfix">
            <a class="btn btn-primary float-right" href="/news">Показать все посты &rarr;</a>
        </div>
    </section>
@endsection


