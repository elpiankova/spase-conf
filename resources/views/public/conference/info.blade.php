@extends('layouts.master')

@section('title', 'Головна')

@section('content')

    <div class="container">

        <ol class="breadcrumb">
            <li><a href="/">{{trans('index.main')}}</a></li>
            <li class="active">{{trans('master.info')}}</li>
        </ol>

        <div class="row">
            <article class="col-sm-9 maincontent">
                <h1 class="thin">{{trans('master.info')}}</h1>
                @foreach($infos as $key=>$info)
                    <div @if($key% 2 == 0)class="jumbotron jumbotron-archive top-space"@endif>
                        {!! $info->TextTrans('text') !!}
                    </div>
                @endforeach
            </article>
        </div>
    </div>

@endsection