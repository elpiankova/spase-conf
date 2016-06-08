<row>
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">Вибір секції - <b>Не працює</b> </div>
            <div class="panel-body">
                <div class="form-group">
                    {{Form::open(array('action' => 'AdminController@request'))}}
                    <select class="form-control" name="organization">
                        <option value="all">Усі</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title_uk}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="button" class="btn btn-success" type="submit">Відфільтрувати</button>
                {{Form::close()}}
            </div>
        </div>

    </div>
</row>
@foreach($contents as $content)
    <row>
        <div class="col-md-10 col-md-offset-1">
            <p>
            <h3 class="text-center">{{$content->title}}</h3>
            </p>
            <p class="text-center">
                <u>{{$content->reqestUser($content->user_id)}}</u>
                @foreach($content->author as $author)
                    , {{$author->name}}
                @endforeach
            </p>
            <p class="text-center">
                {{$content->emailUser($content->user_id)}}
            </p>
            <p>
                {!! $content->text !!}
            </p>
        </div>
    </row>
@endforeach