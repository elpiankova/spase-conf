<row>
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">Фільтрація</div>
            <div class="panel-body">
                {{ Form::open(array('url' => '/admin/download')) }}

                <h4>Вибір секції</h4>
                <div class="form-group">
                    <select class="form-control" name="organization">
                        <option value="all">Усі</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}"
                                    @if($category->id == $id_category['organization']) selected @endif>{{$category->title_uk}}</option>
                        @endforeach
                    </select>
                </div>
                <hr>
                <h4>Відображати</h4>
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="title"
                                   @if(array_key_exists('title', $id_category)) checked @endif>
                            Заголовок
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="author"
                                   @if(array_key_exists('author', $id_category)) checked @endif>
                            Автори
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="institution" checked>
                            Інститути
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="email"
                                   @if(array_key_exists('email', $id_category)) checked @endif>
                            Email
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="text"
                                   @if(array_key_exists( 'text', $id_category)) checked @endif>
                            Текст
                        </label>
                    </div>
                </div>
                <button class="btn btn-success" type="submit">Відфільтрувати</button>
                {{Form::close()}}
            </div>
        </div>

    </div>
</row>
@foreach($contents as $content)
    <row>
        <div class="col-md-10 col-md-offset-1">
            @if(array_key_exists('title', $id_category))
            <p>
            <h3 class="text-center">{{mb_strtoupper($content->title)}}</h3>
            </p>
            @endif
            @if(array_key_exists('author', $id_category))
            <p class="text-center">
                <u>{{$content->requestUser($content->user_id)}}</u>
            </p>

            <p class="text-center">{{$content->formattedAuthors()}}</p>
            @endif

            @if(array_key_exists('author', $id_category))
                    <p>
                        {!! $content->formattedOrganizations() !!}
                    </p>
            @endif

            @if(array_key_exists('email', $id_category))
            <p class="text-center">
                {{$content->emailUser($content->user_id)}}
            </p>
            @endif
            @if(array_key_exists( 'text', $id_category))
            <p>
                {!! $content->text !!}
            </p>
            @endif
        </div>
    </row>
@endforeach