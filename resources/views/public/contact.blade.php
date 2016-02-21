@extends('layouts.master')

@section('title', 'Головна')

@section('content')
        <!-- container -->

<div class="container">

    <ol class="breadcrumb">
        <li><a href="index.html">Головна</a></li>
        <li class="active">Зворотний зв'язок</li>
    </ol>

    <div class="row">
        <article class="col-sm-9 maincontent">
            <header class="page-header">
                <h1 class="page-title">Напишіть нам</h1>
            </header>
            <p>
                У вас є певні питання, пропозиції чи просто нудно? Пишіть і ми завжди з радістю або ненавистю вам
                відповімо
            </p>
            <br>
            <form>
                <div class="row">
                    <div class="col-sm-4">
                        <input class="form-control" type="text" placeholder="Імя">
                    </div>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" placeholder="Email">
                    </div>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" placeholder="Телефот">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <textarea placeholder="Напишіть ваше повідомлення тут" class="form-control" rows="9"></textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <label class="checkbox"><input type="checkbox"> Отримувати новини</label>
                    </div>
                    <div class="col-sm-6 text-right">
                        <input class="btn btn-action" type="submit" value="Відправити повідомлення">
                    </div>
                </div>
            </form>
        </article>
        <aside class="col-sm-3 sidebar sidebar-right">
            <div class="widget">
                <h4>Адрес</h4>
                <address>
                    м.Київ<br>
                    проспект Академіка Глушкова 40<br>
                    корпус 4/1
                </address>
                <h4>Телефон:</h4>
                <address>
                    (044) 526-1583<br>
                    (063) 451-8270
                </address>
            </div>
        </aside>
    </div>
</div>

<section class="container-full top-space">
    <div id="map"></div>
</section>
@endsection