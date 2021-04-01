<?php
echo "<a href='".route('welcome')."'>На главную</a><br>";
echo "<a href='".route('categories')."'>Категории новостей</a><br>";

foreach ($newsList as $key=>$news) {
    if ($category == $news['category']) {
        echo
            "<h3>{$news['title']}</h3>
            <p>{$news['text']}</p>
            <a href = '" . route('news.show', ['id' => $key]) . "'>Подробнее</a>
            <br>";
    }
}
