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
                <h2>15 Конференція</h2>
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{$archive->photo_thesis}}" alt="">
                        <p class="text-right"><a class="btn btn-success btn-lg btn-block" href="{{$archive->thesis}}">Завантажити
                                тези</a></p>
                    </div>
                    <div class="col-sm-6">
                        <img src="{{$archive->photo_img}}" alt="">
                        <p class="text-right"><a class="btn btn-primary btn-lg btn-block" href="{{$archive->img}}">Завантажити
                                фото</a></p>
                    </div>
                </div>

            </div>
    </div>
    @endforeach
@endsection