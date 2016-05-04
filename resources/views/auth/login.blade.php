@extends('layouts.master')

@section('title', 'Головна')

@section('content')

    <div class="container">

        <ol class="breadcrumb">
            <li><a href="/">{{trans('index.main')}}</a></li>
            <li class="active">{{trans('master.login')}}</li>
        </ol>

        <div class="row">

            <!-- Article main content -->
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">{{trans('master.login')}}</h1>
                </header>

                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p class="text-center text-muted">{!! trans('auth.auth_text') !!}</p>
                            <hr>
                            @include('errors.errmsg')
                            {!! Form::open() !!}
                            @include('widgets.form._formitem_text', ['name' => 'email', 'title' => 'Email', 'placeholder' => 'Ваш Email' ])
                            @include('widgets.form._formitem_password', ['name' => 'password', 'title' => trans('auth.pass')])
                            @include('widgets.form._formitem_checkbox', ['name' => 'remember', 'title' => trans('auth.remember')] )
                            @include('widgets.form._formitem_btn_submit', ['title' => trans('master.login')])
                            {!! Form::close() !!}
                            <a href="/reset">{{trans('auth.forgot')}}</a>
                        </div>
                    </div>

                </div>

            </article>
            <!-- /Article -->
        </div>
    </div>
@endsection