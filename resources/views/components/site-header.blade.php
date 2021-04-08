<!-- header section -->
<section role="banner" id="home">
    <header id="header">
        <div class="header-content clearfix"> <a class="logo" href="index.html"><span class="icon icon-genius"></span> LANCER</a>
            <nav class="navigation" role="navigation">
                <ul class="primary-nav">
                    <li><a href="/news">Главная</a></li>
                    <li><a href="{{route('categories')}}">Список категорий</a></li>
                    <li><a href="{{route('user')}}">Формы обратной связи</a></li>
                    <li><a href="{{route('admin.news.index')}}">Админка</a></li>
                </ul>
            </nav>
            <a href="#" class="nav-toggle">Menu<span></span></a> </div>
    </header>
</section>
<section id="main-slider">
    {{--    <div class="owl-carousel">--}}
    <div class="item" style="background-image: url({{asset('assets/user/images/slider/bg1.jpg')}});">
        <div class="slider-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Сайт новостей</h2>
                        <p>Добро пожаловать</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.item-->
</section>
<!--/#main-slider-->
