<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Сайт новостей</title>
    <meta name="description" content="Сайт новостей">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{asset('assets/vendor1/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor1/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/main.css')}}">
</head>
<body>
<x-site-header></x-site-header>

<div class="container">
    @yield('content')
</div>

<x-site-footer></x-site-footer>
<hr>

<script src="{{asset('assets/vendor1/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor1/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/assets/vendor1/startbootstrap-clean-blog/js/clean-blog.min.js')}}"></script>
<script src="{{asset('assets/scripts.js')}}"></script>
@stack('js')
</body>

</html>
