@foreach($contents as $content)
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
@endforeach