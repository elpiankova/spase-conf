@extends('layouts.master')

@section('title', 'Головна')

@section('content')
    <div class="jumbotron top-space">
        <div class="jumbotron2">
            <div class="container">
                <h1 class="text-center thin">Особистий Кабінет</h1>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="thumbnail text-center">
                            <div>
                                <i class="fa fa-user home-ico" aria-hidden="true"></i>
                            </div>
                            <img src="{{$user->info->photo}}" alt="..." class="img-thumbnail" width="50%" height="50%">
                            <h3>{{$user->last_name}} {{$user->first_name}} {{$user->info->middle_name}}</h3>
                            <table class="table text-left  table-hover">
                                <tr>
                                    <td class="info">Ваша організація</td>
                                    <td>{{$user->info->organization_id}}</td>
                                </tr>
                                <tr>
                                    <td class="info">Ваша країна</td>
                                    <td>{{$user->info->country_id}}</td>
                                </tr>
                                <tr>
                                    <td class="info">Ваше місто</td>
                                    <td>{{$user->info->city_id}}</td>
                                </tr>
                                <tr>
                                    <td class="info">Номер телефону</td>
                                    <td>{{$user->info->phone}}</td>
                                </tr>
                                <tr>
                                    <td class="warning">e-mail</td>
                                    <td>{{$user->email}}</td>
                                </tr>
                            </table>
                            <div class="well center-block" style="max-width:400px">
                                <a href="home/edit" type="button" class="btn btn-info btn-lg btn-block"><i
                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    Редагувати особисті
                                    дані
                                </a>
                                <button type="button" class="btn btn-primary btn-lg btn-block">Редагувати акаунт
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <div class="thumbnail">
                            <i class="fa fa-graduation-cap home-ico" aria-hidden="true"></i>
                            <h4>Подати заявку на участь у конференції</h4>
                            <p>Вітчизняний досвід і досягнення в космічній сфері насамперед пов’язані з
                                ракетно-космічною
                                технікою. Космічний статус України визначається високим рівнем використання на
                                світових
                                ринках ракет-носіїв вітчизняного розроблення.</p>
                            <div class="well center-block" style="max-width:400px">
                                <a href="home/conf" type="button" class="btn btn-info btn-lg btn-block"><i
                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    Подати заявку
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection