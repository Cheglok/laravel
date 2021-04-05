@foreach ($newsList as $news)
    <h3>{{$news['title']}}</h3>
    <p>{{$news['text']}}</p>
@endforeach
