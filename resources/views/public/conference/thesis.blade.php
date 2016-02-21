@extends('layouts.master')

@section('title', 'Головна')

@section('content')

    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.html">Головна</a></li>
            <li class="active">Тези</li>
        </ol>

        <div class="row">

            <!-- Article main content -->
            <article class="col-sm-10 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Тези</h1>
                </header>

                <div class="jumbotron jumbotron-archive background-abstract">
                    <div class="row">
                        <div class="col-sm-6">

                            <h2>Вимоги до оформлення тез</h2>
                            <h4>Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere
                                magni
                                ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia
                                perspiciatis at
                                voluptatibus. Libero, aliquid illum possimus numquam fuga.</h4>

                        </div>
                        <div class="col-sm-6">
                            <img src="/assets/images/Kosmicheskiy_proekt_Ionosat-Mikro-COVER.jpg" alt="..." class="img-thumbnail">
                            <a class="btn btn-success btn-lg btn-block text-center" >Завантажити тези</a>
                        </div>
                    </div>

                </div>
            </article>
            <!-- /Article -->

        </div>
    </div>

@endsection