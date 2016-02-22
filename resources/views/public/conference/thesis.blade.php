@extends('layouts.master')

@section('title', 'Головна')

@section('content')

    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Головна</a></li>
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

                            <h2>{{$thesis->TextTrans('title')}}</h2>
                            <h4>{{$thesis->TextTrans('text')}}</h4>

                        </div>
                        <div class="col-sm-6">
                            <img src="{{$thesis->photo}}" alt="..." class="img-thumbnail">
                            <a class="btn btn-success btn-lg btn-block text-center" href="{{$thesis->file}}">Завантажити тези</a>
                        </div>
                    </div>

                </div>
            </article>
            <!-- /Article -->

        </div>
    </div>

@endsection