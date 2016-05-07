@extends('layouts.master')

@section('title', 'Головна')

@section('content')

    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/">Головна</a></li>
            <li class="active">Архів</li>
        </ol>
        <h1 class="thin">Архів</h1>
        @foreach($archives as $archive)
            <div class="jumbotron jumbotron-archive top-space">
                <h2>{{$archive->TextTrans('title')}}</h2>
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{$archive->photo_thesis}}" alt="{{$archive->TextTrans('title')}}">
                        <br>
                        <p class="text-right"><a class="btn btn-success btn-lg btn-block"
                                                 href="{{$archive->thesis}} download">Завантажити
                                тези</a></p>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{$archive->photo_img}}" alt="{{$archive->TextTrans('title')}}">
                        <br>
                        <p class="text-right"><a class="btn btn-primary btn-lg btn-block"
                                                 href="{{$archive->img}} download">Завантажити
                                фото</a></p>
                    </div>
                </div>

            </div>
    </div>
    @endforeach
@endsection