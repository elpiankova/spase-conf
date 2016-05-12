@extends('layouts.master')

@section('title', 'Головна')

@section('content')
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({
            selector: 'textarea',
            height: 300,
            plugins: [
                "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "table contextmenu directionality emoticons template textcolor paste fullpage textcolor colorpicker textpattern"
            ],
            contextmenu: "paste link image inserttable | cell row column deletetable",
            contextmenu_never_use_native: true,
            menubar: false,
            statusbar: false,
            toolbar1: "bold italic underline| alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent | link unlinktable | subscript superscript | charmap image",
            content_css: [
                '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
                '//www.tinymce.com/css/codepen.min.css'
            ]
        });</script>
    <div class="jumbotron top-space">
        <div class="jumbotron2">
            <div class="container">
                <h2 class="text-center thin">{{trans('user.conf.title')}}</h2>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        @include('errors.errmsg')
                        <div class="well">
                            {!! Form::open() !!}
                            <hr>
                            <div class="top-margin">
                                <label for="favorite_team">{{trans('user.conf.section')}}</label>
                                <select type="text" list="team_list1" class="form-control" name="section_id">
                                    @foreach($categoryes as $key=>$category)
                                        <option value="{{$key}}">{{$category->TextTrans('title')}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="top-margin">
                                <label>{{trans('user.conf.name')}}</label>
                                <input type="text" class="form-control text_form  conf_name" name="title">
                            </div>
parentNode
                            <div class="top-margin" id="items">
                                <label>{{trans('user.conf.authors')}}</label>
                                <div class="form-inline">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <input type="text" class="form-control text_form name_autor" name="name[]"
                                                   placeholder="{{trans('auth.name')}}">
                                        </div>
                                        <div class="col-md-3">
                                            <select list="team_list"
                                                    class="chosen-select form-control input-sm"
                                                    name="org_ig[]"
                                                    data-placeholder="{{trans('auth.organization')}}...">
                                                <option value=""></option>
                                                @foreach($organizations as $organization)
                                                    <option value="{{$organization->id}} @if($organization->id == $user->info->organization_id) selected @endif">{{$organization->TextTrans('title')}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" class="form-control text_form" name="email[]"
                                                   placeholder="email">
                                        </div>
                                        <div class="col-md-3">
                                            <i class="fa fa-times fa-6  btn btn-danger" aria-hidden="true"
                                               onclick="del_input(this.parentNode.parentNode.parentNode)"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="text-center" id="inputi">
                                <div role="button" class="btn btn-sm btn-success text-center"
                                     onclick="add_input()">
                                    <i class="fa fa-plus" aria-hidden="true"></i> {{trans('user.conf.add')}}
                                </div>
                            </div>
                            <div class="top-margin">
                                <label>{{trans('user.conf.text')}}</label>
                                <textarea class="form-control" rows="3" name="text"></textarea>
                            </div>

                            <hr>
                            <div class="col-lg-12 ">
                                <button class="btn btn-action  center-block" type="submit">{{trans('user.conf.save')}}
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
    <script src="/assets/js/chosen.jquery.js" type="text/javascript"></script>
    <script src="/assets/js/jquery.maskedinput-1.2.2.js" type="text/javascript"></script>
    <script type="text/javascript">
        var config = {
            '.chosen-select': {width: '100%'},
            '.chosen-select-deselect': {allow_single_deselect: true},
            '.chosen-select-no-single': {disable_search_threshold: 10},
            '.chosen-select-no-results': {no_results_text: 'Oops, nothing found!'},
            '.chosen-select-width': {width: "100%"}
        };
        for (var selector in config) {
            $(selector).chosen(config[selector]);

            console.info(selector);
        }
    </script>
    <script type="text/javascript">
        jQuery(function ($) {
            $.mask.definitions['~'] = '[+-]';
            $.mask.definitions['a'] = "[A-zА-я]";
            $('.name_autor').mask('	a. a. a?aaaaaaaaaaaaaaaaa', {placeholder: " "});
        });
    </script>
    <script language="javascript">
        var id_select = 0;
        function add_input(obj) {
            var new_input = document.createElement('div');
            id_select = id_select + 1;
            new_input.className = "form-inline";
            new_input.innerHTML =
                    '<br>' +
                    '<div class="row">' +
                    '<div class="col-md-3">' +
                    '<input type="text" class="form-control text_form name_autor" name="name[]" placeholder="{{trans('auth.name')}}">' +

                    '</div>' +
                    '<div class="col-md-3">' +
                    '<select list="team_list" class="chosen-select form-control input-sm" id="chosen-select_' + id_select + '" name="org_ig[]" data-placeholder="{{trans('auth.organization')}}...">' +
                    '<option value=""></option>' +
                    '@foreach($organizations as $organization)' +
                    '<option value="{{$organization->id}} @if($organization->id == $user->info->organization_id) selected @endif">{{$organization->TextTrans('title')}}</option>@endforeach' +
                    '</select>' +
                    '</div>' +
                    '<div class="col-md-3">' +
                    '<input type="text" class="form-control text_form" name="email[]" placeholder="email">' +
                    '</div>' +
                    '<div class="col-md-3">' +
                    '<i class="fa fa-times fa-6  btn btn-danger" aria-hidden="true"  onclick="del_input(this.parentNode.parentNode.parentNode)"></i>' +
                    '</div>' +
                    '</div>';
            document.getElementById('items').appendChild(new_input);
            asas();
            mask();
        }
        function del_input(obj) {
            document.getElementById('items').removeChild(obj)
        }
    </script>
@endsection