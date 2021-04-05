@extends('layouts.main2')
@section('content')
    <section id="intro" class="section intro">
        <div class="container">
            <div class="col-md-12 text-center">
                <h3>Категории</h3>
                <p>Выбирайте интересующую вас категорию</p>
                <hr>
            </div>
            @forelse ($newsCategories as $category)
                <article class="post-preview text-center">
                    <a href="{{route('category', $category)}}">
                        <h2 class="post-title">{{$category}}</h2>

                    </a>
                </article>
                <hr>
            @empty
                <h2>Новостей нет</h2>
            @endforelse
        </div>
    </section>
@endsection
