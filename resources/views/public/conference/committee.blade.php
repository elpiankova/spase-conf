@extends('layouts.master')

@section('title', 'Головна')

@section('content')

    <div class="container">

        <ol class="breadcrumb">
            <li><a href="/">{{trans('index.main')}}</a></li>
            <li class="active">{{trans('master.committee')}}</li>
        </ol>


        <div class="row">

            <!-- Article main content -->
            <article class="col-sm-10 maincontent">
                <header class="page-header">
                    <h1 class="page-title">{{trans('master.committee')}}</h1>
                </header>
                @foreach($commitets as $commitet)
                <div class="jumbotron jumbotron-archive background-abstract">
                    <div class="row">
                        <div class="col-sm-12">

                            <h2>{{$commitet->TextTrans('title')}}</h2>
                            {!! $commitet->TextTrans('text') !!}

                        </div>
                    </div>
                </div>
                @endforeach
            </article>
            <!-- /Article -->

        </div>
    </div>

@endsection