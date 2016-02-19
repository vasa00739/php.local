<?php

use App\Models\User;
use App\Models\News;
use App\Config;

include 'autoload.php';

include 'Assets/backend/head.php';


If (!empty($_POST))
{
    $news = new News();
    $news->title = $_POST['title'];
    $news->text = $_POST['text'];
    $news->date = '2016-02-19';
    $news->save();
}

$articles = News::findAll();

foreach ($articles as $news)
{
    echo '<tr>';
    echo '<td>' .$news->id .'</td>';
    echo '<td>' .$news->title .'</td>';
    echo '<td>' .$news->text .'</td>';
    echo '<td><a href="edit.php?id='.$news->id.'">Редактировать</a></td>';
}
include 'Assets/backend/bottom.php';