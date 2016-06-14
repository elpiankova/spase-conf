@extends('layouts.master')

@section('title', 'Головна')

@section('content')
    <div class="jumbotron top-space">
        <div class="jumbotron2">
            <div class="container">

                <ol class="breadcrumb">
                    <li><a href="/">{{trans('index.main')}}</a></li>

                    <li><a href="/singin">{{trans('master.login')}}</a></li>

                    <li class="active">{{trans('auth.register')}}</li>
                </ol>

                <div class="row">

                    <!-- Article main content -->
                    <article class="col-xs-12 maincontent">
                        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                            <header class="page-header text-center">
                                <h1 class="page-title">{{trans('auth.register')}}</h1>
                            </header>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <p class="text-center text-muted">{!! trans('auth.reg_text') !!} </p>
                                    <div class="alert alert-info alert-block">
                                        {!! trans('auth.mail') !!}
                                    </div>
                                    <hr>
                                    @include('errors.errmsg')
                                    {!! Form::open() !!}
                                    <div class="top-margin">
                                        <label>{{trans('auth.name')}}</label>
                                        <input type="text" class="form-control text_form" name="first_name">
                                    </div>
                                    <div class="top-margin">
                                        <label>{{trans('auth.last_name')}}</label>
                                        <input type="text" class="form-control text_form" name="last_name">
                                    </div>
                                    @if(App::getLocale() != 'en')
                                        <div class="top-margin">
                                            <label>{{trans('auth.middle')}}</label>
                                            <input type="text" class="form-control text_form" name="middle">
                                        </div>
                                    @endif
                                    <div class="top-margin">
                                        <label>{{trans('auth.gender')}}</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="gender" value="1">
                                                {{trans('auth.male')}}
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="gender" value="2">
                                                {{trans('auth.female')}}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="top-margin">
                                        <label>{{trans('auth.birthday')}}</label>
                                        <input type="date" class="form-control" name="birth">
                                    </div>
                                    <div class="top-margin">
                                        <label for="favorite_team">{{trans('auth.organization')}}:</label>
                                        <select type="text" list="team_list" class="chosen-select form-control"
                                                name="organization" data-placeholder="{{trans('auth.organization')}}...">

                                            <option value=""></option>
                                            @foreach($organizations as $organization)
                                                <option value="{{$organization->id}}">{{$organization->TextTrans('title')}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="top-margin">
                                        <label for="favorite_team">{{trans('auth.country')}}:</label>
                                        <select type="text" list="team_list1" class="form-control" name="country"
                                                id="Country">
                                            @foreach($countrys as $country)
                                                <option value="{{$country->id}}">{{$country->TextTrans('title')}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="top-margin">
                                        <label for="favorite_team">{{trans('auth.city')}}:</label>
                                        <select type="text" list="team_list2" class="form-control" name="city"
                                                id="City">
                                            @foreach($cityes as $city)
                                                <option value="{{$city->id}}"
                                                        class="{{$city->countries_id}}">{{$city->TextTrans('title')}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="top-margin">
                                        <label>{{trans('auth.phone')}}</label>
                                        <input type="tel" class="form-control"
                                               name="phone" id="phone"/>
                                    </div>
                                    <div class="top-margin">
                                        <label>Email </label>
                                        <input type="email" class="form-control" name="email">
                                    </div>

                                    <div class="row top-margin">
                                        <div class="col-sm-6">
                                            <label>{{trans('auth.pass')}}</label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="col-sm-6">
                                            <label>{{trans('auth.pass_re')}}</label>
                                            <input type="password" class="form-control" name="password_confirm">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-lg-12 ">
                                        <button class="btn btn-action  center-block"
                                                type="submit">{{trans('auth.register')}}
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
            $('#phone').mask('+?99(999) 999-9999');
        });
    </script>
@endsection