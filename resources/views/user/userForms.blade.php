@extends('layouts.main2')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-2">
            <h2>Оставьте свой отзыв о работе нашего сайта</h2>
            <br>
            <form method="post" action="{{route('userFeedback')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Имя</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <label for="feedback">Отзыв</label>
                    <textarea type="text" id="feedback" name="feedback" class="form-control">{{old('feedback')}}</textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-success">Отправить</button>
            </form>
        </div>
        <div class="col-lg-6 col-lg-offset-2">
            <h2>Оставьте свой заказ!</h2>
            <br>
            <form method="post" action="{{route('userOrder')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Имя</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <label for="tel">Телефон</label>
                    <input type="tel" id="tel" name="tel" class="form-control" value="{{old('tel')}}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <label for="order">Опишите свой заказ в свободной форме</label>
                    <textarea type="text" id="order" name="order" class="form-control">{{old('order')}}</textarea>
                </div>
                <br>
                <button type="submit" class="btn btn-success">Отправить</button>
            </form>
        </div>
    </div>
    <hr>
</div>
@endsection
</body>

</html>
