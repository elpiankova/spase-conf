<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 21.02.16
 * Time: 16:40
 */ ?>

@if ($errors->any())
    <div class="alert alert-danger alert-block">
        {{-- <button type="button" class="close" data-dismiss="alert"><i class="fa fa-minus-square"></i></button> --}}
        <strong>Ошибка</strong>
        @if ($message = $errors->first(0, ':message'))
            {{ $message }}
        @else
            Пожалуйста проверьте правильность заполнения формы
        @endif
    </div>
@endif

@if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert"><i class="fa fa-minus-square"></i></button>
        {{ $message }}
    </div>
@endif