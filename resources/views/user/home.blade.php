@extends('layouts.master')

@section('title', 'Головна')

@section('content')
    <div class="jumbotron top-space">
        <div class="jumbotron2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12"><h2 class="text-center thin">{{trans('user.home_title')}}</h2></div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="thumbnail text-center">
                            <div>
                                <i class="fa fa-user home-ico" aria-hidden="true"></i>
                            </div>
                            <img src="{{$user->photo}}" alt="..." class="img-thumbnail" width="50%" height="50%">
                            <h3>{{$user->last_name}} {{$user->first_name}} {{$user->middle_name}}</h3>
                            <table class="table text-left table-bordered">
                                <tr>
                                    <td>{{trans('user.organization')}}</td>
                                    <td>@if($organization != null){{$organization->TextTrans('title')}}@endif</td>
                                </tr>
                                <tr>
                                    <td>{{trans('user.country')}}</td>
                                    <td>@if($country != null) {{$country->TextTrans('title')}}@endif</td>
                                </tr>
                                <tr>
                                    <td>{{trans('user.city')}}</td>
                                    <td>@if($city != null) {{$city->TextTrans('title')}} @endif</td>
                                </tr>
                                <tr>
                                    <td>{{trans('user.phone')}}</td>
                                    <td>{{$user->phone}}</td>
                                </tr>
                                <tr>
                                    <td>e-mail</td>
                                    <td>{{$user->email}}</td>
                                </tr>
                            </table>
                            <div class="well center-block" style="max-width:400px">
                                <a href="home/edit" type="button" class="btn btn-info btn-lg btn-block"><i
                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    {{trans('user.edit_button')}}
                                </a>
                                    <a href="home/email" type="button" class="btn btn-warning btn-lg btn-block">
                                        <span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span>
                                        {{trans('user.edit_pass')}}
                                    </a>
                                    <a href="home/email" type="button" class="btn btn-success btn-lg btn-block">
                                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                                        {{trans('user.edit_email')}}
                                    </a>

                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 text-center">
                        <div class="thumbnail">
                            <i class="fa fa-graduation-cap home-ico" aria-hidden="true"></i>
                            <h4>{{trans('user.home_conf.title')}}</h4>
                            <p> {{trans('user.home_conf.text')}}</p>
                            @if($count_conf  == 1 and $conf == 1)
                            <div class="alert alert-info alert-block">
                                {{trans('user.home_conf.count')}}
                            </div>
                            @endif
                            @include('errors.errmsg')
                            <div class="well center-block" style="max-width:400px">
                                @if($conf == 1)
                                    <a href="home/conf" type="button" class="btn btn-primary btn-lg btn-block"><i
                                                class="fa fa-file-o" aria-hidden="true"></i>
                                        {{trans('user.conf_button')}}
                                    </a>
                                    @if($count_conf == 0)
                                        <button type="button" class="btn btn-success btn-lg btn-block"
                                                data-toggle="modal"
                                                data-target=".bs-example-modal-sm">
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                            {{trans('user.conf_button_user')}}
                                        </button>
                                    @endif
                                @else
                                    <a type="button" class="btn btn-info btn-lg btn-block" disabled="disabled"><i
                                                class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        {{trans('user.conf_button_error')}}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">
                        {{trans('user.home_conf.user.title')}}</h4>
                </div>
                <div class="modal-body">
                    {{trans('user.home_conf.user.text')}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i
                                class="fa fa-times aria-hidden="true"></i>
                        {{trans('user.home_conf.user.close')}}</button>
                    <a href="home/conf_user" type="button" class="btn btn-success"><i
                                class="fa fa-check" aria-hidden="true"></i>

                        {{trans('user.home_conf.user.apply')}}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection