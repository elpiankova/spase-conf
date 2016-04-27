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
                                        на <a href="/login">Авторизацію</a> і зайдіть там не потрібно кожен раз
                                        реєструватись. Навіщо вам тратити свій і наш дорогоцінний час для заповнення
                                        акаунтів а якщо навіть забули пароль так відновіть а не реєструйтесь знову </p>
                                    <hr>
                                    @include('errors.errmsg')
                                    {!! Form::open() !!}
                                    <div class="top-margin">
                                        <label>Імя</label>
                                        <input type="text" class="form-control text_form" name="first_name">
                                    </div>
                                    <div class="top-margin">
                                        <label>Прізвище</label>
                                        <input type="text" class="form-control text_form" name="last_name">
                                    </div>
                                    <div class="top-margin">
                                        <label>По батькові</label>
                                        <input type="text" class="form-control text_form" name="middle">
                                    </div>
                                    <div class="top-margin">
                                        <label>Дата народження</label>
                                        <input type="date" class="form-control" name="birth">
                                    </div>
                                    <div class="top-margin">
                                        <label for="favorite_team">Ваша організація:</label>
                                        <select type="text" list="team_list" class="form-control" name="organization">
                                            <option value="1" selected>ІКД</option>
                                            <option value="2">ПТУ</option>
                                            <option value="3">СССР</option>
                                            <option value="4">ДК</option>
                                            <!-- и т.д. -->
                                        </select>
                                    </div>
                                    <div class="top-margin">
                                        <label for="favorite_team">Ваша країна:</label>
                                        <select type="text" list="team_list1" class="form-control" name="country">
                                            <option value="1" selected>Україна</option>
                                            <option value="2">Росія</option>
                                            <option value="3">Польща</option>
                                            <option value="4">СССР</option>
                                            <!-- и т.д. -->
                                        </select>
                                    </div>
                                    <div class="top-margin">
                                        <label for="favorite_team">Ваше місто:</label>
                                        <select type="text" list="team_list2" class="form-control" name="city">
                                            <option value="1" selected>Київ</option>
                                            <option value="2">Харків</option>
                                            <option value="3">Львів</option>
                                            <option value="4">Скадовськ</option>
                                            <!-- и т.д. -->
                                        </select>
                                    </div>

                                    <div class="top-margin">
                                        <label>Номер телефону в форматі 38098-111-1111</label>
                                        <input type="tel" class="form-control"
                                               name="phone"/>
                                    </div>
                                    <div class="top-margin">
                                        <label>Email </label>
                                        <input type="email" class="form-control" name="email">
                                    </div>

                                    <div class="row top-margin">
                                        <div class="col-sm-6">
                                            <label>Пароль</label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Повторіть пароль</label>
                                            <input type="password" class="form-control" name="password_confirm">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-lg-12 ">
                                        <button class="btn btn-action  center-block" type="submit">Зареєструватись
                                        </button>
                                    </div>
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