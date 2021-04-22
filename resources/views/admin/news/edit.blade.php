@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-2">
            <h2>Редактировать новость</h2>
            <br>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif
{{--            @if(session()->has('error'))--}}
{{--                <div class="alert alert-danger">{{session()->get('error')}}</div>--}}
{{--            @endif--}}
            <form method="post" action="{{route('admin.news.update', ['news' => $news])}}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="category">Категория</label>
                    <select class="form-control" name="category_id" id="category">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}"
                            @if($category->id === $news->category_id) selected @endif>{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="source">Источник</label>
                    <select class="form-control" name="source_id" id="source">
                        @foreach($sources as $source)
                            <option value="{{$source->id}}">{{$source->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Название</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{$news->title}}">
                </div>
                <div class="form-group">
                    <label for="image">Изображение</label>
                    <input type="file" id="image" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="text">Текст</label>
                    <textarea type="text" id="text" name="text" class="form-control">{!!$news->text!!}</textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
