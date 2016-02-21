@extends('layouts.master')

@section('title', 'Головна')

@section('content')
    <div class="jumbotron top-space">
        <div class="jumbotron2">
            <div class="container">

                <ol class="breadcrumb">
                    <li><a href="/">Головна</a></li>

                    <li><a href="/singin">Автризація</a></li>

                    <li class="active">Реєстрація</li>
                </ol>

                <div class="row">

                    <!-- Article main content -->
                    <article class="col-xs-12 maincontent">
                        <header class="page-header">
                            <h1 class="page-title">Реєстрація</h1>
                        </header>

                        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3 class="thin text-center">Створення нового акаунта</h3>
                                    <p class="text-center text-muted">Якщо ви уже реєструвались на цьому сайті перейдіть
                                        на <a href="signin.html">Авторизацію</a> і зайдіть там не потрібно кожен раз
                                        реєструватись. Навіщо вам тратити свій і наш дорогоцінний час для заповнення
                                        акаунтів а якщо навіть забули пароль так відновіть а не реєструйтесь знову </p>
                                    <hr>
                                    @include('errors.errmsg')
                                    {!! Form::open() !!}
                                    @include('widgets.form._formitem_text', ['name' => 'email', 'title' => 'Email', 'placeholder' => 'Email' ])
                                    @include('widgets.form._formitem_password', ['name' => 'password', 'title' => 'Пароль', 'placeholder' => 'Пароль' ])
                                    @include('widgets.form._formitem_password', ['name' => 'password_confirm', 'title' => 'Подтверждение пароля', 'placeholder' => 'Пароль' ])
                                    @include('widgets.form._formitem_btn_submit', ['title' => 'Регистрация'])
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- /Article -->
                </div>
            </div>
        </div>
    </div>    <!-- /container -->
@endsection