@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-2">
            <h2>Добавить новость</h2>
            <br>
            @if(session()->has('error'))
                <div class="alert alert-danger">{{session()->get('error')}}</div>
            @endif
            <form method="post" action="{{route('admin.news.store')}}">
                @csrf
                <div class="form-group">
                    <label for="category">Категория</label>
                    <select class="form-control" name="category_id" id="category">
                        <option value="2">Выбрать</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="source">Источник</label>
                    <select class="form-control" name="source_id" id="source">
                        <option value="2">Выбрать</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Название</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{old('title')}}">
                </div>
                <div class="form-group">
                    <label for="text">Текст</label>
                    <textarea type="text" id="text" name="text" class="form-control">{!! old('text') !!}</textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
