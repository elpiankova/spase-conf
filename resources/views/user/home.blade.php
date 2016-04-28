@extends('layouts.master')

@section('title', 'Головна')

@section('content')
    <div class="jumbotron top-space">
        <div class="jumbotron2">
            <div class="container">
                <h2 class="text-center thin">Особистий Кабінет</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="thumbnail">
                            <h3>{{$user->last_name}} {{$user->first_name}} {{$user->info->middle_name}}</h3>
                            <img src="{{$user->info->photo}}" alt="..." class="img-thumbnail" width="50%" height="50%">
                            <p><b>Ваша організація:</b> {{$user->info->organization_id}} </p>
                            <p><b>Ваша країна:</b> {{$user->info->country_id}} </p>
                            <p><b>Ваше місто:</b> {{$user->info->city_id}} </p>
                            <p><b>Номер телефону: </b> {{$user->info->phone}} </p>
                            <button type="button" class="btn btn btn-info">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Редагувати особисті
                                дані
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <a href="home/edit">
                        <div class="col-lg-6 text-center">
                            <i class="fa fa-pencil-square-o home-ico" aria-hidden="true"></i>
                            <h4>Редагувати особисті дані</h4>
                        </div>
                    </a>
                    <a href="home/conf">
                        <div class="col-lg-6 text-center">
                            <i class="fa fa-envelope-o home-ico" aria-hidden="true"></i>
                            <h4>Подати заявку на участь у конференції</h4>
                            <p>Вітчизняний досвід і досягнення в космічній сфері насамперед пов’язані з
                                ракетно-космічною
                                технікою. Космічний статус України визначається високим рівнем використання на світових
                                ринках ракет-носіїв вітчизняного розроблення.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection