<!DOCTYPE html>
<style type="text/css">
    body{
        background: #232323;
    }
    a{
        text-decoration: none;
    }
    .haitflix-container > p{
        color: #ffffff;
        text-align: left;
        font-size: 24px;
        margin-left: 5px;
    }
    .hx-nav-container{
        padding: 0.2rem;
        width: 260px;
    }
    ul.hx-nav-menu{
        padding: 0;
        margin-top: 1rem;
    }
    ul.hx-nav-menu > li {
        position: relative;
        display: block;
        padding: 0.95rem;
        font-size: 24px;
        color: #ffffff;
    }
    ul.hx-nav-menu > li > a {
        display: block;
        color: #ffffff;
    }
    ul.hx-nav-menu > li:hover {
        background-color: #000000;
        border-radius: 1rem;
    }
    .haiflix-content-container{
        width: 79%;
        padding: 1rem;
        position: absolute;
        margin-left: 302px;
        bottom: 765px;
    }
    .haitflix-text-movie{
        flex-basis: 0;
        flex-grow: 1;
        min-width: 0;
        max-width: 100%;
        color: #ffffff;
    }

    .haitflix-movie-block{
        position: absolute;
        display: grid;
        grid-column-gap: 10%;
        width: 89%;
        grid-template-columns: 1fr 1fr 1fr;
    }
    .haitflix-movie-block > div > img{
        border-radius: 1rem;
        width: 100%;
    }
</style>
<head>
    <link href="style/index_style.css" rel="stylesheet">
</head>
<html lang="ru-RU">
    <body>
        <div class="haitflix-container">
            <p>HAITFLIX</p>
        </div>
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
        <div class="haiflix-content-container">
            <div class="haitflix-text-movie">
                <h3>ФИЛЬМЫ</h3>
            </div>
            <div class="haitflix-movie-block">
                <div>
                    <img src="files/image/terminator_1.jpg">
                </div>
                <div>
                    <img src="files/image/terminator_2.jpg">
                </div>
                <div>
                    <img src="files/image/terminator_3.jpg">
                </div>
            </div>
        </div>
    </body>
</html>



