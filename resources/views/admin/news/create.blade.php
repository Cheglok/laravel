@extends('layouts.admin')
@section('content')
    <h1 id="name">Создадим новость, здесь будет форма<span></span></h1>
    <h3>Добавить новость</h3>
    <form action="post">
        <p><input type="text" placeholder="Заголовок"></p>
        <textarea name="fullText" id="fullText" cols="30" rows="10" placeholder="Подробный текст новости"></textarea><br>
        <textarea name="shortText" id="shortText" cols="30" rows="5" placeholder="Краткий текст новости"></textarea><br>
        <input type="submit">
    </form>
@endsection
