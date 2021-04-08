@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-2">
            <h2>Добавить новость</h2>
            <br>
            <form method="post" action="{{route('admin.news.store')}}">
                @csrf
                <div class="form-group">
                    <label for="category">Категория</label>
                    <select class="form-control" name="category_id" id="category">
                        <option value="0">Выбрать</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Наименование</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{old('title')}}">
                </div>
                <div class="form-group">
                    <label for="slug">Слаг</label>
                    <input type="text" id="slug" name="slug" class="form-control" value="{{old('slug')}}">
                </div>
                <div class="form-group">
                    <label for="description">Описание</label>
                    <textarea type="text" id="description" name="description" class="form-control">{!! old('description') !!}</textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
