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
                            {!! Form::open() !!}
                            <div class="top-margin">
                                <label>Імя</label>
                                <input type="text" class="form-control text_form" name="first_name"
                                       value="{{$user->first_name}}">
                            </div>
                            <div class="top-margin">
                                <label>Прізвище</label>
                                <input type="text" class="form-control text_form" name="last_name"
                                       value="{{$user->last_name}}">
                            </div>
                            <div class="top-margin">
                                <label>По батькові</label>
                                <input type="text" class="form-control text_form" name="middle"
                                       value="{{$user->info->middle_name}}">
                            </div>
                            <div class="top-margin">
                                <label>Дата народження</label>
                                <input type="date" class="form-control" name="birth" value="{{$user->info->birth}}">
                            </div>
                            <div class="top-margin">
                                <label for="favorite_team">Ваша організація:</label>
                                <select type="text" list="team_list" class="form-control" name="organization">
                                    <option value="1" @if($user->info->organization_id == 1) selected @endif>ІКД</option>
                                    <option value="2" @if($user->info->organization_id == 2) selected @endif>ПТУ</option>
                                    <option value="3" @if($user->info->organization_id == 3) selected @endif>СССР</option>
                                    <option value="4" @if($user->info->organization_id == 4) selected @endif>ДК</option>
                                    <!-- и т.д. -->
                                </select>
                            </div>
                            <div class="top-margin">
                                <label for="favorite_team">Ваша країна:</label>
                                <select type="text" list="team_list1" class="form-control" name="country">
                                    <option value="1" @if($user->info->country_id == 1) selected @endif>Україна</option>
                                    <option value="2" @if($user->info->country_id == 2) selected @endif>Росія</option>
                                    <option value="3" @if($user->info->country_id == 3) selected @endif>Польща</option>
                                    <option value="4" @if($user->info->country_id == 4) selected @endif>СССР</option>
                                    <!-- и т.д. -->
                                </select>
                            </div>
                            <div class="top-margin">
                                <label for="favorite_team">Ваше місто:</label>
                                <select type="text" list="team_list2" class="form-control" name="city">
                                    <option value="1" @if($user->info->city_id == 1) selected @endif>Київ</option>
                                    <option value="2" @if($user->info->city_id == 2) selected @endif>Харків</option>
                                    <option value="3" @if($user->info->city_id == 3) selected @endif>Львів</option>
                                    <option value="4" @if($user->info->city_id == 4) selected @endif>Скадовськ</option>
                                    <!-- и т.д. -->
                                </select>
                            </div>

                            <div class="top-margin">
                                <label>Номер телефону в форматі 38098-111-1111</label>
                                <input type="tel" class="form-control"
                                       name="phone" value="{{$user->info->phone}}"/>
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
@endsection