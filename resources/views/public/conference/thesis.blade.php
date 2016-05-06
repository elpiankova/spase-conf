@extends('layouts.master')

@section('title', 'Головна')

@section('content')

    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">{{trans('index.main')}}</a></li>
            <li class="active">{{trans('master.thesis')}}</li>
        </ol>

        <div class="row">

            <!-- Article main content -->
            <article class="col-sm-10 maincontent">
                <header class="page-header">
                    <h1 class="page-title">{{trans('master.thesis')}}</h1>
                </header>

                <div class="jumbotron jumbotron-archive background-abstract">
                    <div class="row">
                        <div class="col-sm-6">

                            <h2>{{$thesis->TextTrans('title')}}</h2>
                            <h4>{!! $thesis->TextTrans('text') !!}</h4>

                        </div>
                        <div class="col-sm-6">
                            <img src="/{{$thesis->photo}}" alt="{{$thesis->photo}}" class="img-thumbnail">
                            <a class="btn btn-success btn-lg btn-block text-center" href="{{$thesis->file}}">{{trans('conference.downloads')}}</a>
                        </div>
                    </div>

                </div>
            </article>
            <!-- /Article -->

        </div>
    </div>

@endsection