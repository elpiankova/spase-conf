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
                            <h3 class="thin text-center">Вхід у існуючий акаунт</h3>
                            <p class="text-center text-muted">Якщо ви не зареестровані на сайті перейдіть на сторінку <a
                                        href="/signup">Реєстрації</a> та заповніть усі дані, дайте відповідь на
                                маразматичні питання. А в кінці получіль щасливу перепустку на сайт</p>
                            <hr>
                            @include('errors.errmsg')
                            {!! Form::open() !!}
                            @include('widgets.form._formitem_text', ['name' => 'email', 'title' => 'Email', 'placeholder' => 'Ваш Email' ])
                            @include('widgets.form._formitem_password', ['name' => 'password', 'title' => 'Пароль', 'placeholder' => 'Пароль' ])
                            @include('widgets.form._formitem_checkbox', ['name' => 'remember', 'title' => 'Запомнить меня'] )
                            @include('widgets.form._formitem_btn_submit', ['title' => 'Вход'])
                            {!! Form::close() !!}
                            <a href="/reset">Забув пароль</a>
                        </div>
                    </div>

                </div>

            </article>
            <!-- /Article -->
        </div>
    </div>
@endsection