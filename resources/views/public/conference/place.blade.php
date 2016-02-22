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
                @foreach($places as $place)
                    <div class="jumbotron jumbotron-archive background-abstract">
                        <h2>{{$place->TextTrans('title')}}</h2>
                        <div class="row">
                            <div class="col-sm-12">
                                <p>{!! $place->TextTrans('text') !!}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </article>
            <!-- /Article -->

        </div>
    </div>
@endsection