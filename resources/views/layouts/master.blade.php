<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <title>Українська конференція з космічних досліджень - @yield('title')</title>
    <link rel="shortcut icon" href="/assets/images/gt_favicon.png">

    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="/assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/style.css">

</head>
<body>
<div class="navbar navbar-inverse headroom">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/"><img src="/assets/images/logo.png" alt=""></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="/">Головна</a>
                </li>
                <li>
                    <a href="/archive">Архів</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">15 конференція <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="/conference/info">Інформація</a>
                        </li>
                        <li>
                            <a href="/conference/thesis">Тези</a>
                        </li>
                        <li>
                            <a href="/conference/place">Місце проведення</a>
                        </li>
                        <li>
                            <a href="/conference/committee">Комітет</a>
                        </li>
                    </ul>
                </li>
                <li><a href="/contact">Зворотний зв'язок</a></li>
                @if(Sentinel::inRole('user'))
                    <li><a class="btn" href="/home">Моя сторінка</a></li>
                @else
                    <li><a class="btn" href="/login">Вхід</a></li>
                @endif
            </ul>

            <div class="navbar-right">
                {{App::getLocale()}}
            </div>
        </div>
    </div>
</div>

@yield('content')
<footer id="footer" class="top-space">

    <div class="footer1">
        <div class="container">
            <div class="row">

                <div class="col-md-3 widget">
                    <h3 class="widget-title">Контакти</h3>
                    <div class="widget-body">
                        Скороход Тетяна
                        <p> +38 (044) 5261583<br>
                            +38 (063) 4518270<br>
                            <a href="mailto:ukrainianspaceconf@gmail.com">ukrainianspaceconf@gmail.com</a>
                        </p>
                    </div>
                </div>

                <div class="col-md-3 widget">
                    <h3 class="widget-title">Наші сторінки</h3>
                    <div class="widget-body">
                        <p class="follow-me-icons">
                            <a href="https://twitter.com/"><i class="fa fa-twitter fa-2"></i></a>
                            <a href="https://github.com/MammutCris/space-conf"><i class="fa fa-github fa-2"></i></a>
                            <a href=""><i class="fa fa-facebook fa-2"></i></a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 widget">
                    <div class="widget-body">
                        <p class="text-center">
                            Copyright &copy; 2012 Developed in Space Research Institute NASU-NSAU
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="/assets/js/headroom.min.js"></script>
<script src="/assets/js/jQuery.headroom.min.js"></script>
<script src="/assets/js/template.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script>
<script src="/assets/js/google-map.js"></script>
</body>
</html>