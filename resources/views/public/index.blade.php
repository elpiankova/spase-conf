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
                <p><a class="btn btn-default btn-lg" role="button" href="/signup">{{trans('index.register')}}</a>
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
                    <li class="active">{{trans('index.main')}}</li>
                </ol>
                <h2 class="text-center thin">{{$text->TextTrans('heading')}}</h2>
                <div class="row">
                    @foreach($categoryes as $category)
                        <div class="col-lg-3 text-center">
                            <img class="img-rounded img-circle" src="assets/images/Shmutz1.jpg"
                                 alt="Generic placeholder image"
                                 width="140"
                                 height="140">
                            <h4>{{$category->TextTrans('title')}}</h4>
                            <p>{{$category->TextTrans('text')}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


@endsection