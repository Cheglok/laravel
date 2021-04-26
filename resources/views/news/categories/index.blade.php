@extends('layouts.main')
@section('content')
    <section id="intro" class="section intro">
        <div class="container">
            <div class="col-md-12 text-center">
                <h2>Список всех категорий</h2>
                <p>Выбирайте интересующую вас категорию</p>
                <hr>
            </div>
            @forelse ($newsCategories as $category)
                <article class="post-preview text-center">
                    <a href="{{route('category', $category->id)}}">
                        <h2 class="post-title">{{$category->title}}</h2>

                    </a>
                </article>
                <hr>
            @empty
                <h2>Новостей нет</h2>
            @endforelse
            {{$newsCategories->links()}}
        </div>
    </section>
@endsection
