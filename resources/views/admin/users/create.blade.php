@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-6 col-lg-offset-2">
            <h2>Добавить пользователя</h2>
            <br>
            <form method="post" action="{{route('admin.users.store')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Имя</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Имя пользователя" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email адрес пользователя" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Пароль для пользователя" value="{{old('password')}}">
                </div>
                <div class="form-group">
                    <p>Назначить администратором?</p>
                    <label for="admin">Да</label>
                    <input type="radio" id="admin" name="is_admin" value="1">
                    <label for="not_admin">Нет</label>
                    <input type="radio" id="not_admin" name="is_admin" value="0" checked>
                </div>
                <button type="submit" class="btn btn-success">Сохранить</button>

            </form>
        </div>
    </div>
@endsection

