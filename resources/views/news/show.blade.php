@extends('layouts.main2')
@section('content')
<article class="post-preview text-center">

        <h2 class="post-title">{{$news->title}}</h2>

        <h3 class="post-subtitle">{{$news->text}}</h3>


    <p class="post-meta">Опубликовал Админ
        {{$news->created_at}} &middot;

    </p>
</article>
<hr>
@endsection
