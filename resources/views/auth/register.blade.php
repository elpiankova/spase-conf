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
                                        <label>Стать</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="gender" value="1">
                                                Чоловіча
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="gender" value="2">
                                                Жіноча
                                            </label>
                                        </div>
                                    </div>
                                    <div class="top-margin">
                                        <label>Дата народження</label>
                                        <input type="date" class="form-control" name="birth">
                                    </div>
                                    <div class="top-margin">
                                        <label for="favorite_team">Ваша організація:</label>
                                        <select type="text" list="team_list" class="chosen-select form-control"
                                                name="organization">
                                            @foreach($organizations as $organization)
                                                <option value="{{$organization->id}}">{{$organization->TextTrans('title')}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="top-margin">
                                        <label for="favorite_team">Ваша країна:</label>
                                        <select type="text" list="team_list1" class="form-control" name="country"
                                                id="Country">
                                            @foreach($countrys as $country)
                                                <option value="{{$country->id}}">{{$country->TextTrans('title')}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="top-margin">
                                        <label for="favorite_team">Ваше місто:</label>
                                        <select type="text" list="team_list2" class="form-control" name="city"
                                                id="City">
                                            @foreach($cityes as $city)
                                                <option value="{{$city->id}}"
                                                        class="{{$city->countries_id}}">{{$city->TextTrans('title')}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="top-margin">
                                        <label>Номер телефону</label>
                                        <input type="tel" class="form-control"
                                               name="phone" id="phone"/>
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
    <script>
        function dynamicSelect(id1, id2) {
            if (document.getElementById && document.getElementsByTagName) {
                var sel1 = document.getElementById(id1);
                var sel2 = document.getElementById(id2);
                var clone = sel2.cloneNode(true);
                var clonedOptions = clone.getElementsByTagName("option");
                refreshDynamicSelectOptions(sel1, sel2, clonedOptions);
                sel1.onchange = function () {
                    refreshDynamicSelectOptions(sel1, sel2, clonedOptions);
                }
            }
        }
        function refreshDynamicSelectOptions(sel1, sel2, clonedOptions) {
            while (sel2.options.length) {
                sel2.remove(0);
            }
            var pattern1 = /( |^)(select)( |$)/;
            var pattern2 = new RegExp("( |^)(" + sel1.options[sel1.selectedIndex].value + ")( |$)");
            for (var i = 0; i < clonedOptions.length; i++) {
                if (clonedOptions[i].className.match(pattern1) ||
                        clonedOptions[i].className.match(pattern2)) {
                    sel2.appendChild(clonedOptions[i].cloneNode(true));
                }
            }
        }
        window.onload = function () {
            dynamicSelect("Country", "City");
        }
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/chosen.jquery.js" type="text/javascript"></script>
    <script src="/assets/js/jquery.maskedinput-1.2.2.js" type="text/javascript"></script>
    <script type="text/javascript">
        var config = {
            '.chosen-select': {},
            '.chosen-select-deselect': {allow_single_deselect: true},
            '.chosen-select-no-single': {disable_search_threshold: 10},
            '.chosen-select-no-results': {no_results_text: 'Oops, nothing found!'},
            '.chosen-select-width': {width: "95%"}
        }
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }
    </script>
    <script type="text/javascript">
        jQuery(function ($) {
            $.mask.definitions['~'] = '[+-]';
            $('#phone').mask('+9(999) 999-9999');
        });
    </script>
@endsection