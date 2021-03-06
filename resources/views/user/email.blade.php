@extends('layouts.master')

@section('title', 'Змінити email')

@section('content')
    <div class="jumbotron top-space">
        <div class="jumbotron2">
            <div class="container">
                <h2 class="text-center thin">{{trans('user.email.title')}}</h2>
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        @include('errors.errmsg')
                        <div class="well">
                            {!! Form::open(array('enctype' => 'multipart/form-data')) !!}
                            <div class="form-group">
                                <label>{{trans('user.email.password')}}</label>
                                <input type="password" class="form-control text_form" name="password">
                            </div>
                            <div class="form-group">
                                <label>{{trans('user.email.email')}}</label>
                                <input type="text" class="form-control text_form" name="email"
                                       value="{{$user->email}}">
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <a href="/home" type="button" class="btn btn-default" data-dismiss="modal"><i
                                                class="fa fa-times" aria-hidden="true"></i>
                                        {{trans('user.home_conf.user.close')}}</a>
                                </div>

                                <div class="col-lg-6 ">
                                    <button class="btn btn-action center-block"
                                            type="submit">{{trans('user.conf.save')}}
                                    </button>
                                </div>
                            </div>
                            <hr>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
