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

            menubar: false,
            statusbar: false,
            toolbar1: "bold italic underline| alignleft aligncenter alignright alignjustify | bullist numlist | outdent indent | link unlinktable | subscript superscript | charmap image",
            content_css: [
                '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
                '//www.tinymce.com/css/codepen.min.css'
            ]
        });</script>
    <script language="javascript">
        function add_input(obj) {
            var new_input = document.createElement('div');
            new_input.className = "form-inline";
            new_input.innerHTML =
                    '<input type="text" class="form-control text_form" name="name[]">' +
                    '<input type="text" class="form-control text_form" name="email[]">' +
                    '<input type="text" class="form-control text_form" name="org_ig[]">';
            new_input.innerHTML = new_input.innerHTML + '<i class="fa fa-times fa-6  btn btn-danger" aria-hidden="true"  onclick="del_input(this.parentNode)"></i>';
            document.getElementById('items').appendChild(new_input);
        }
        function del_input(obj) {
            document.getElementById('items').removeChild(obj)
        }
    </script>
    <div class="jumbotron top-space">
        <div class="jumbotron2">
            <div class="container">
                <h2 class="text-center thin">Заявка на конференцію</h2>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        @include('errors.errmsg')
                        <div class="well">
                            {!! Form::open() !!}
                            <hr>
                            <div class="top-margin">
                                <label for="favorite_team">Секція</label>
                                <select type="text" list="team_list1" class="form-control" name="section_id">
                                    @foreach($categoryes as $key=>$category)
                                        <option value="{{$key}}">{{$category->TextTrans('title')}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="top-margin">
                                <label>Назва тез</label>
                                <input type="text" class="form-control text_form" name="title">
                            </div>

                            <div class="top-margin" id="items">
                                <label>Додаткові автори</label>
                                <div class="form-inline">
                                    <input type="text" class="form-control text_form" name="name[]">
                                    <input type="text" class="form-control text_form" name="email[]">
                                    <input type="text" class="form-control text_form" name="org_ig[]">
                                    <i class="fa fa-times fa-6  btn btn-danger" aria-hidden="true"
                                       onclick="del_input(this.parentNode)"></i>

                                </div>
                            </div>
                            <hr>
                            <div class="text-center" id="inputi">
                                <div role="button" class="btn btn-sm btn-success text-center"
                                     onclick="add_input()">
                                    <i class="fa fa-plus" aria-hidden="true"></i> Добавити автора
                                </div>
                            </div>
                            <div class="top-margin">
                                <label>Текст тез</label>
                                <textarea class="form-control" rows="3">Easy (and free!) You should check out our premium features.</textarea>
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