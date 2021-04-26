@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-2">
            <h2>Редактировать пользователя</h2>
            <br>
            <form method="post" action="{{route('admin.users.update', ['user' => $user])}}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Имя</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{$user->email}}" disabled>
                </div>
                <div class="form-group">
                    <p>Назначить администратором?</p>
                    <label for="admin">Да</label>
                    <input type="radio" id="admin" name="is_admin" value="1"
                           @if($user->is_admin === true) checked @endif>
                    <label for="not_admin">Нет</label>
                    <input type="radio" id="not_admin" name="is_admin" value="0"
                           @if($user->is_admin === false) checked @endif>
                </div>
                <button type="submit" class="btn btn-success">Сохранить</button>
            </form>
        </div>
    </div>
@endsection
