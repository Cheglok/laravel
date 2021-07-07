@extends('layouts.main')
@php($title='Сайт новостей')
@section('content')
    <section id="intro" class="section intro">
        <div class="container">
            <div class="col-md-12 text-center">
                <h1>Лента новостей</h1>
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
                        {{$news->created_at}} &middot;<br>
                        <a href="{{route('category', $news->category->id)}}"><i>Категория: {{$news->category->title}}</i><br></a>
                        <b>Источник: {{$news->source->title}}</b>
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


