@extends('layouts.master')

@section('title', 'Головна')

@section('content')


    <div class="container">

        <ol class="breadcrumb">
            <li><a href="/">Головна</a></li>
            <li class="active">Місце проведення</li>
        </ol>
        <div class="row">
            <!-- Article main content -->
            <article class="col-sm-10 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Місце проведення</h1>
                </header>

                <div class="jumbotron jumbotron-archive background-abstract">
                    <div class="row">
                        <div class="col-sm-6 map">
                            <div id="map"></div>
                        </div>
                        <div class="col-sm-6">
                            <h2 class="text-center">Описання місця проведення</h2>
                            <h4>Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae
                                facere
                                magni
                                ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia
                                perspiciatis at
                                voluptatibus. Libero, aliquid illum possimus numquam fuga.</h4>
                        </div>
                    </div>
                </div>
                <div class="jumbotron jumbotron-archive background-abstract">
                    <h2>Умови проживання</h2>
                    <div class="row">
                        <div class="col-sm-12">
                            <h4>Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae
                                facere
                                magni
                                ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia
                                perspiciatis at
                                voluptatibus. Libero, aliquid illum possimus numquam fuga.</h4>
                        </div>
                    </div>
                </div>
            </article>
            <!-- /Article -->

        </div>
    </div>
@endsection