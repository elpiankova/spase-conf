<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 21.02.16
 * Time: 18:46
 */?>
@extends('layouts.master')

@section('title', 'Головна')

@section('content')

    <div class="container">

        <ol class="breadcrumb">
            <li><a href="/">Головна</a></li>
            <li class="active">Вхід</li>
        </ol>

        <div class="row">

            <!-- Article main content -->
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Вхід</h1>
                </header>

                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="thin text-center">Відновлення паролю</h3>
                            <hr>
                            @include('errors.errmsg')
                            {!! Form::open() !!}
                            @include('widgets.form._formitem_text', ['name' => 'email', 'title' => 'Email', 'placeholder' => 'Ваш Email' ])
                            @include('widgets.form._formitem_btn_submit', ['title' => 'Сброс пароля'])
                            {!! Form::close() !!}
                        </div>
                    </div>

                </div>

            </article>
            <!-- /Article -->
        </div>
    </div>
@endsection
