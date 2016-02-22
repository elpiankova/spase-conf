@extends('layouts.master')

@section('title', 'Головна')

@section('content')

    <div class="container">

        <ol class="breadcrumb">
            <li><a href="index.html">Головна</a></li>
            <li class="active">Інформація</li>
        </ol>

        <div class="row">
            <article class="col-sm-9 maincontent">
                <h1 class="thin">Інформація</h1>
                <h2>15-ТА УКРАЇНСЬКА КОНФЕРЕНЦІЯ З КОСМІЧНИХ ДОСЛІДЖЕНЬ</h2>
                @foreach($infos as $key=>$info)
                    <div @if($key% 2 == 0)class="jumbotron jumbotron-archive top-space"@endif>
                        {!! $info->TextTrans('text') !!}
                    </div>
                @endforeach
            </article>
        </div>
    </div>

@endsection