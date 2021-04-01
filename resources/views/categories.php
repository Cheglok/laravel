<?php
echo "<a href='".route('welcome')."'>На главную</a><br>";
echo "<a href='/admin/news/create'>Добавить новость</a><br>";
echo "<h1>На нашем сайте вы можете увидеть новости следующих категорий:</h1>
<ul>";
foreach ($newsCategories as $category) {
    echo "<li><a href='".route('category', ['category'=>$category])."'>{$category}</a></li>";
}
echo "</ul>";
