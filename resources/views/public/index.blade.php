@extends('layouts.master')

@section('title', 'Головна')

@section('content')
    <header id="head" class="secondary"></header>
    <!-- Header -->
    <header id="head">
        <div class="container">
            <div class="row">
                <h1 class="lead">{{$text->TextTrans('background_title')}}</h1>
                <p class="tagline">{{$text->TextTrans('background_text')}}
                </p>
                <br>
                <p><a class="btn btn-default btn-lg" role="button" href="/signup">Зареєструватись</a>
                </p>
            </div>
        </div>
    </header>
    <!-- Intro -->
    <div class="container text-center">
        <br> <br>
        <h1 class="thin">{{$text->TextTrans('title')}}</h1>
        <p class="text-muted">
            {{$text->TextTrans('text')}}
        </p>
    </div>
    <!-- /Intro-->
    <!-- /Header -->
    <div class="jumbotron top-space">
        <div class="jumbotron2">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="active">Головна</li>
                </ol>
                <h2 class="text-center thin">{{$text->TextTrans('heading')}}</h2>
                <div class="row">
                    <div class="col-lg-3 text-center">
                        <img class="img-rounded img-circle" src="assets/images/Shmutz1.jpg"
                             alt="Generic placeholder image"
                             width="140"
                             height="140">
                        <h4>Дослідження ближнього космосу</h4>
                        <p>Вітчизняний досвід і досягнення в космічній сфері насамперед
                            пов’язані з
                            ракетно-космічною технікою. Космічний статус України визначається високим рівнем
                            використання на
                            світових ринках ракет-носіїв вітчизняного розроблення. </p>
                    </div>
                    <div class="col-lg-3 text-center">
                        <img class="img-rounded img-circle" src="assets/images/Shmutz2.jpg"
                             alt="Generic placeholder image"
                             width="140"
                             height="140">
                        <h4>Спостереження Землі з космосу</h4>
                        <p>На кінець 2012 року у світі нараховується понад два десятки
                            космічних
                            апаратів дистанційного зондування Землі. Космічні апарати дистанційного зондування можуть
                            використовуватись для цивільних завдань і для здійснення розвідки.</p>

                    </div>
                    <div class="col-lg-3 text-center">
                        <img class="img-rounded img-circle" src="assets/images/Shmutz2.jpg"
                             alt="Generic placeholder image"
                             width="140"
                             height="140">
                        <h4>Космічна біологія</h4>
                        <p>Біологічна наука, або розділ біології, що вивчає можливість
                            існування
                            живих організмів у космосі та на інших планетах, крім Землі. Ця наука розглядає вплив на
                            можливо
                            існуючих організмів космосу гравітації, температури, життя у вакуумі.</p>

                    </div>
                    <div class="col-lg-3 text-center">
                        <img class="img-rounded img-circle" src="assets/images/Shmutz4.jpg"
                             alt="Generic placeholder image"
                             width="140"
                             height="140">
                        <h4>Науки про мікрогравітацію</h4>
                        <p>Мікрогравітація є одним з найбільш багатообіцяючих напрямків у
                            комерційному використанні космосу. Мікрогравітація дозволяє створювати нові матеріали, які
                            не
                            можна зробити на Землі через дію сили тяжіння </p>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection