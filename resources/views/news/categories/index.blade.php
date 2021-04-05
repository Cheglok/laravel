
<ul>
@foreach ($newsCategories as $category)
    <li><a href="{{route('category', $category)}}">{{$category}}</a></li>
    @endforeach
</ul>
