<?php
/**
 * Created by PhpStorm.
 * User: mammut
 * Date: 21.02.16
 * Time: 18:48
 */ ?>
@extends('layouts.master')

@section('title', 'Головна')

@section('content')

    <div class="container">

        <ol class="breadcrumb">
            <li><a href="/">Головна</a></li>
            <li class="active">Вхід</li>
        </ol>

        <div class="row">

            <!-- Article main content -->
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Вхід</h1>
                </header>

                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="thin text-center">яерез декілька хвилин вам на пошту прийде лист з
                                інструкціями</h3>
                        </div>
                    </div>
                </div>

            </article>
            <!-- /Article -->
        </div>
    </div>
@endsection
