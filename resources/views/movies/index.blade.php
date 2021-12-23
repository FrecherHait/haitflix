<!DOCTYPE html>
<html lang="ru-RU">
    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('style/index_style.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <style>
        #flag-main{
            background-color: #000000;
            border-radius: 1rem;
        }
    </style>
    <body>
        <div class="haitflix-container">
            <p>HAITFLIX</p>
        </div>

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
                                    <a class="nav-link active" aria-current="page" href="movies">Главная</a>
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

        <section>
            <div class="haitflix-content">
                <div class="row">
                    <div class="col-2 hidden-sm hidden-xs">
                        <div class="hx-nav-container">
                            <ul class="hx-nav-menu">
                                <li><a href="#">BUTTON1</a></li>
                                <li><a href="#">BUTTON2</a></li>
                                <li><a href="#">BUTTON3</a></li>
                                <li><a href="#">BUTTON4</a></li>
                                <li><a href="#">BUTTON5</a></li>
                                <li><a href="#">BUTTON6</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-9 col-xs-12">
                            <div class="container">
                                <div class="haitflix-text-movie">
                                    <h3>ФИЛЬМЫ</h3>
                                </div>
                                <div class="row">
                                    @foreach($paginator as $item)
                                        @php /** @var \App\Models\MovieList $item */ @endphp
                                        <div class="col-12 col-lg-3 col-sm-6 col-xs-12">
                                            <div class="haitflix-movie-round-image mb-3">
                                                <img src="{{ $item->bg_img }}">
                                                <a href="#">{{ $item->title }}</a>
                                            </div>
                                        </div>
                                    @endforeach

                                    <!--div class="col-12 col-lg-3 col-sm-6 col-xs-12">
                                        <div class="haitflix-movie-round-image mb-3">
                                            <img src="files/image/terminator_2.jpg">
                                            <a href="#">Терминатор 2: Судный день</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3 col-sm-6 col-xs-12">
                                        <div class="haitflix-movie-round-image mb-3">
                                            <img src="files/image/terminator_3.jpg">
                                            <a href="#">Терминатор 3: Восстание машин</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3 col-sm-6 col-xs-12">
                                        <div class="haitflix-movie-round-image mb-3">
                                            <img src="files/image/terminator_4.jpg">
                                            <a href="#">Терминатор 4: Да придёт спаситель</a>
                                        </div>
                                    </div-->
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>

    </body>
</html>



