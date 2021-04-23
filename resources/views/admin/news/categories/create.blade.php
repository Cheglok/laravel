@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-2">
            <h2>Добавить категорию</h2>
            <br>
            <form method="post" action="{{route('admin.categories.store')}}">
                @csrf
                <div class="form-group">
                    <label for="title">Наименование</label>
                    <input type="text" id="title" name="title" @error('title') style = "border: 1px solid red" @enderror class="form-control" placeholder="Название категории" value="{{old('title')}}">
                    @if($errors->has('title'))
                        @foreach($errors->get('title') as $error)
                            {{$error}}
                        @endforeach
                    @endif
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

