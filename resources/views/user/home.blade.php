@extends('layouts.master')

@section('title', 'Головна')

@section('content')
    <div class="jumbotron top-space">
        <div class="jumbotron2">
            <div class="container">
                <h2 class="text-center thin">Особистий Кабінет</h2>
                <div class="row">
                    <a href="home/edit">
                        <div class="col-lg-6 text-center">
                            <i class="fa fa-pencil-square-o home-ico" aria-hidden="true"></i>
                            <h4>Редагувати особисті дані</h4>
                            <p>Вітчизняний досвід і досягнення в космічній сфері насамперед пов’язані з
                                ракетно-космічною
                                технікою. Космічний статус України визначається високим рівнем використання на світових
                                ринках ракет-носіїв вітчизняного розроблення.</p>
                        </div>
                    </a>
                    <a href="home/edit">
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