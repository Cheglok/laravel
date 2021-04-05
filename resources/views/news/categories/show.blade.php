
<a href='{{route('welcome')}}'>На главную</a><br>
<a href='{{route('categories')}}'>Категории новостей</a><br>
<a href='/admin/news/create'>Добавить новость</a><br>

@foreach ($newsList as $key=>$news)
    @if ($category == $news['category'])
            <h3>{{$news['title']}}</h3>
            <p>{{$news['text']}}</p>
            <a href = "{{route('news.show', $key)}}">Подробнее</a>
            <br>
    @endif
@endforeach
