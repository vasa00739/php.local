<?php

use App\Models\User;
use App\Models\News;
use App\Config;
include 'autoload.php';

$articles = News::findAll();

include 'Assets/head.php';

$config = Config::getInstance();
var_dump($config);

/*
$news = new News();
$news->title = "Мой заголовок";
$news->text = "Мой текст";
$date = date("Y-m-d",strtotime($date));
$news->date = $date;
$news->save();


foreach ($articles as $news)
{
    echo "<table>";
    echo "<tr><td><a href='article.php?id=". $news->id ."'>";
    echo $news->title;
    echo "</a></td><tr>";
    echo "<tr><td>";
    echo $news->text;
    echo "</td><tr>";
    echo "</table>";
}

*/
include 'Assets/bottom.php';