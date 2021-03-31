<?php

foreach ($newsList as $key => $news) {
    echo $news . "<a href='".route('news.show', ['id' => ++$key])."'>Ред.</a><br>";
}
