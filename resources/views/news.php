<?php

echo "<a href='".route('welcome')."'>На главную</a><br>";
echo "<a href='".route('categories')."'>Категории новостей</a><br>";
echo "<a href='/admin/news/create'>Добавить новость</a><br>";
echo "<h2>Подробнее о новости</h2>
<h3>{$news['title']}</h3>
<p>{$news['text']}</p>";
