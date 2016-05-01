<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="utf-8">
    <title> {{trans('index.title')}}- @yield('title')</title>
    <link rel="shortcut icon" href="/assets/images/gt_favicon.png">

    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">

    <link rel="stylesheet" href="/assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link href="/assets/css/select2.min.css" rel="stylesheet" />
    <script src="/assets/js/select2.min.js"></script>

</head>
<body>
<div class="navbar navbar-inverse headroom  @if(isset($page)) navbar-fixed-top @endif">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/"><img src="/assets/images/logo.png" alt=""></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="/">{{trans('index.main')}}</a>
                </li>
                <li>
                    <a href="/archive">{{trans('index.archive')}}</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <b
                                class="caret"></b> {{trans('index.16')}}</a>
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


                @if(Sentinel::guest())
                    <li><a class="btn" href="/login">Вхід</a></li>
                @else
                    <li><a class="btn" href="/home">Моя сторінка</a></li>
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <b class="caret"></b> {{ Config::get('languages')[App::getLocale()] }}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                                <li>
                                    <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </li>
            </ul>
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