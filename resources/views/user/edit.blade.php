@extends('layouts.master')

@section('title', 'Головна')

@section('content')
    <div class="jumbotron top-space">
        <div class="jumbotron2">
            <div class="container">
                <h2 class="text-center thin">Редагування профілю</h2>
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        @include('errors.errmsg')
                        <div class="well">
                            {!! Form::open(array('enctype' => 'multipart/form-data')) !!}
                            <div class="top-margin">
                                <label>{{trans('auth.name')}}</label>
                                <input type="text" class="form-control text_form" name="first_name"
                                       value="{{$user->first_name}}">
                            </div>
                            <div class="top-margin">
                                <label>{{trans('auth.last_name')}}</label>
                                <input type="text" class="form-control text_form" name="last_name"
                                       value="{{$user->last_name}}">
                            </div>
                            @if(App::getLocale() != 'en')
                            <div class="top-margin">
                                <label>{{trans('auth.middle')}}</label>
                                <input type="text" class="form-control text_form" name="middle"
                                       value="{{$user->info->middle_name}}">
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
                                <input type="date" class="form-control" name="birth" value="{{$user->info->birth}}">
                            </div>
                            <div class="top-margin">
                                <label for="favorite_team">{{trans('auth.organization')}}:</label>
                                <select type="text" list="team_list" class="chosen-select form-control"
                                        name="organization" data-placeholder="{{trans('auth.organization')}}...">
                                    <option value=""></option>
                                    @foreach($organizations as $organization)
                                        <option value="{{$organization->id}} @if($organization->id == $user->info->organization_id) selected @endif">{{$organization->TextTrans('title')}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="top-margin">
                                <label for="favorite_team">{{trans('auth.country')}}:</label>
                                <select type="text" list="team_list1" class="form-control" name="country"
                                        id="Country">
                                    @foreach($countrys as $country)
                                        <option value="{{$country->id}}"
                                                @if($country->id == $user->info->country_id) selected @endif>{{$country->TextTrans('title')}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="top-margin">
                                <label for="favorite_team">{{trans('auth.city')}}:</label>
                                <select type="text" list="team_list2" class="form-control" name="city"
                                        id="City">
                                    @foreach($cityes as $city)
                                        <option value="{{$city->id}}"
                                                class="{{$city->countries_id}}"
                                                @if($city->id == $user->info->city_id) selected @endif>{{$city->TextTrans('title')}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="top-margin">
                                <label>{{trans('auth.phone')}}</label>
                                <input type="tel" class="form-control"
                                       name="phone" id="phone" value="{{$user->info->phone}}"/>
                            </div>
                            <div class="top-margin">
                                <label>Добавити фото</label>
                                <input type="file" accept="image/jpeg,image/png"
                                       id="photo"
                                       name="photo"/>
                            </div>
                            <hr>
                            <div class="col-lg-12 ">
                                <button class="btn btn-action  center-block" type="submit">Зберегти
                                </button>
                            </div>
                            <hr>
                            <hr>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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