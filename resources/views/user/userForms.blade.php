<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Сайт новостей</title>
    <meta name="description" content="Сайт новостей">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{asset('assets/vendor1/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor1/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/main.css')}}">
</head>
<body>
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
<script src="{{asset('assets/vendor1/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor1/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/assets/vendor1/startbootstrap-clean-blog/js/clean-blog.min.js')}}"></script>
<script src="{{asset('assets/scripts.js')}}"></script>
</body>

</html>
