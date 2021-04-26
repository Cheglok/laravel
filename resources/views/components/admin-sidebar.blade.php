<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">

            <li>
                <a href="/news"><i class="fa fa-dashboard"></i> На главную</a>
            </li>
            <li>
                <a href=""><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-sitemap"></i> Новости<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><p>Базовые категории</p></li>
                    <li>
                        <a href="{{route('admin.categories.index')}}">Категории</a>
                    </li>
                    <li>
                        <a href="{{route('admin.news.index')}}">Новости</a>
                    </li>
                    <li>
                        <a href="{{route('admin.users.index')}}">Пользователи</a>
                    </li>
                    <li>
                        <a href="{{route('user')}}">Формы обратной связи</a>
                    </li>
                    <li>
                        <a href="#">Дополнительная панель<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Здесь будут ещё инструменты</a>
                            </li>
                            <li>
                                <a href="#">Здесь будут ещё инструменты</a>
                            </li>
                        </ul>

                    </li>
                </ul>
            </li>
        </ul>

    </div>

</nav>
