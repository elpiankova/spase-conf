@extends('layouts.master')

@section('title', 'Головна')

@section('content')
        <!-- container -->

<div class="container">

    <ol class="breadcrumb">
        <li><a href="/">{{trans('index.main')}}</a></li>
        <li class="active">{{trans('master.contact')}}</li>
    </ol>

    <div class="row">
        <article class="col-sm-9 maincontent">
            <header class="page-header">
                <h1 class="page-title">{{trans('contact.title')}}</h1>
            </header>
            <p>
                {{trans('contact.text')}}
            </p>
            <br>
            @include('errors.errmsg')
            {!! Form::open() !!}
            @if(!Sentinel::guest())
                @if(Sentinel::inRole('user'))
                    <div class="row">
                        <div class="col-sm-4">
                            <input type="hidden" name="name" value="{{$user->first_name}}">
                        </div>
                        <div class="col-sm-4">
                            <input type="hidden" name="email" value="{{$user->email}}">
                        </div>
                        <div class="col-sm-4">
                            <input type="hidden" name="phone" value="{{$user->info->phone}}">
                        </div>
                    </div>
                @else
                <div class="row">
                    <div class="col-sm-4">
                        <input class="form-control" name="name" type="text" placeholder="{{trans('auth.name')}}" required>
                    </div>
                    <div class="col-sm-4">
                        <input class="form-control" name="email" type="email" placeholder="Email" required>
                    </div>
                    <div class="col-sm-4">
                        <input class="form-control phone" name="phone" type="text" placeholder="{{trans('auth.phone')}}" required>
                    </div>
                </div>
                @endif
            @else
                <div class="row">
                    <div class="col-sm-4">
                        <input class="form-control" name="name" type="text" placeholder="{{trans('auth.name')}}" required>
                    </div>
                    <div class="col-sm-4">
                        <input class="form-control" name="email" type="email" placeholder="Email" required>
                    </div>
                    <div class="col-sm-4">
                        <input class="form-control phone" name="phone" type="text" placeholder="{{trans('auth.phone')}}" required>
                    </div>
                </div>
            @endif
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <textarea placeholder="{{trans('contact.textarea')}}" class="form-control" rows="9" name="text"
                                  required></textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-6">
                        <input class="btn btn-action" type="submit" value="{{trans('contact.send')}}">
                    </div>
                </div>
            {!! Form::close() !!}
            <br>
        </article>
        <aside class="col-sm-3 sidebar sidebar-right">
            <div class="widget">
                {!! trans('contact.address') !!}
            </div>
        </aside>
    </div>
</div>

<section class="container-full top-space">
    <div id="map"></div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script>
<script src="/assets/js/google-map.js"></script>
<script src="/assets/js/jquery.maskedinput-1.2.2.js" type="text/javascript"></script>
<script type="text/javascript">
    jQuery(function ($) {
        $.mask.definitions['~'] = '[+-]';
        $('.phone').mask('+99(999) 999-9999');
    });
</script>
@endsection