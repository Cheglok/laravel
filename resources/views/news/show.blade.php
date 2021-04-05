@extends('layouts.main2')
@section('content')
<article class="post-preview text-center">

        <h2 class="post-title">{{$news['title']}}</h2>

        <h3 class="post-subtitle">подробно {{$news['text']}}
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis doloribus dolorum eaque eum maxime
            nam nisi quod sequi, tempora voluptas?</h3>


    <p class="post-meta">Опубликовал Админ
        {{now()}} &middot;

    </p>
</article>
<hr>
@endsection
