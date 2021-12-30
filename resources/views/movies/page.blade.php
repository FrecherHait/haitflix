<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('style/hx_movie_style.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<style>

</style>
<body>
<!--div class="haitflix-container">
    <p>HAITFLIX</p>
</div-->

<div class="haitflix-mob-nav">
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!--a class="navbar-brand" href="#">Навигационная панель Offcanvas</--a-->
            <div class="offcanvas bg-dark offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 hx-mob-nav-menu">
                        <li class="hx-mob-nav-item" id="flag-main">
                            <a class="nav-link active" aria-current="page" href="{{ route('movies.index') }}">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Ссылка</a>
                        </li>
                        <!--li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Выпадающий список
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="dropdown-item" href="#">Действие</a></li>
                                <li><a class="dropdown-item" href="#">Другое действие</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Что-то еще здесь</a></li>
                            </ul>
                        </li-->
                    </ul>
                    <!--form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Поиск">
                        <button class="btn btn-outline-success" type="submit">Поиск</button>
                    </form-->
                </div>
            </div>
        </div>
    </nav>
</div>

<main class="pt-fixed">
        <div class="row">
            <div class="hx-movie-bg-image d-inline-flex mb-3">
                <div class="hx-movie-bg-block">
                    <img src="{{ $item->img }}" class="hx-img-cover">
                </div>
            </div>
            <div class="col-12 px-0 px-md-3">
                <div class="row">
                    <div class="col-12 col-xl-8">
                        <div class="p-3">
                            <div class="row hx-movie-content">
                                <div class="col-12 d-md-none">
                                    <div class="mb-1">
                                        <h2 style="color: white;" class="d-inline-block">{{ $item->title }} ({{ $item->year }})</h2>
                                    </div>
                                    <div class="mb-1">
                                        <h2 style="color: white;" class="d-inline-block">Оригинальное название: {{ $item->orig_name }}</h2>
                                    </div>
                                    <div class="mb-1">
                                        <h2 style="color: white;" class="d-inline-block">Тип фильма: {{ $item->type->title }}</h2>
                                    </div>
                                </div>
                                <div class="col-6 col-xl-4">
                                    <img width="600" height="900" src="{{ $item->bg_img }}" class="hx-poster-image img-fluid">
                                </div>
                                <div class="col-6 col-xl-8">
                                    <div class="mb-1">
                                        <h2 style="color: white;" class="d-inline-block">{{ $item->title }} ({{ $item->year }})</h2>
                                    </div>
                                    <div class="mb-1">
                                        <h2 style="color: white;" class="d-inline-block">Оригинальное название: {{ $item->orig_name }}</h2>
                                    </div>
                                    <div class="mb-1">
                                        <h2 style="color: white;" class="d-inline-block">Тип фильма: {{ $item->type->title }}</h2>
                                    </div>
                                    <div class="mb-1">
                                        <h3 style="color: white;" class="d-inline-block">Описание: {{ $item->description }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="player">
                        <script src="{{ asset('playerjs.js') }}"></script>
                        <script language="JavaScript">
                            var player = new Playerjs({id:"player", title:"Милый дом", file:"{{ old('link', $item->link) }}"});
                        </script>
                    </div>
                </div>
            </div>
        </div>
</main>

<section>
    <!--div class="haitflix-content">
        <div class="row">
            <div class="col-2 hidden-sm hidden-xs">
                <div class="hx-nav-container">
                    <ul class="hx-nav-menu">
                        <li id="flag-main"><a href="{{ route('movies.index') }}">ГЛАВНАЯ</a></li>
                        <li><a href="#">BUTTON2</a></li>
                        <li><a href="#">BUTTON3</a></li>
                        <li><a href="#">BUTTON4</a></li>
                        <li><a href="#">BUTTON5</a></li>
                        <li><a href="#">BUTTON6</a></li>
                    </ul>
                </div>
            </div-->

            <!--div class="col-lg-9 col-xs-12">
                <div class="container">
                    <div class="haitflix-text-movie">
                        <h3>ФИЛЬМЫ</h3>
                    </div>
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>
    </div-->
</section>

</body>
</html>
