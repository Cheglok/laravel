@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-2">
            <h2>Добавить категорию</h2>
            <br>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
            @endif
            @if(session()->has('error'))
                <div class="alert alert-danger">{{session()->get('error')}}</div>
            @endif
            <form method="post" action="{{route('admin.categories.store')}}">
                @csrf
                <div class="form-group">
                    <label for="title">Наименование</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{old('title')}}">
                </div>
                <div class="form-group">
                    <label for="description">Описание</label>
                    <textarea type="text" id="description" name="description" class="form-control">{!! old('description') !!}</textarea>
                </div>
                <div class="form-group">
                    <label for="is_visible">Отображать</label>
                    <input type="checkbox" id="is_visible" name="is_visible" value="1"
                           @if(boolval(old('is_visible')) === true) checked @endif>
                </div>
                <br>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </form>
        </div>
    </div>
@endsection

