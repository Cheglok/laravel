@extends('layouts.main')
@section('content')
    <section id="intro" class="section intro">
        <div class="container">
            <div class="col-md-12 text-center">
                <h2>Новости по отдельной категории</h2>
                <h3>{{$category->title}}</h3>
                <p>Читайте наши интересные новости o категории {{$category->title}}</p>
            </div>
            @foreach($category->news as $news)
                    <article class="post-preview text-center">
                        <a href="{{route('news.show', $news->id)}}">
                            <h2 class="post-title">{{$news->title}}</h2>
                            <h3 class="post-subtitle">{{$news->text}}</h3>
                        </a>
                        <p class="post-meta">Опубликовал Админ
                            {{now()}} &middot;
                            <i>Источник {{$news->source->title}}</i>
                        </p>
                    </article>
                    <hr>
            @endforeach
        </div>
        <div class="clearfix">
            <a class="btn btn-primary float-right" href="/news">Показать все посты &rarr;</a>
        </div>
    </section>
@endsection


