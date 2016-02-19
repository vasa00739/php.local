<?php
use App\Models\News;

include 'autoload.php';

if (!empty($_GET['id']))
{
    $id = $_GET['id'];
    $news = News::findById($id);
    include 'Assets/backend/head1.php';
    include 'Assets/backend/bottom1.php';

}

if (!empty($_POST))
{
    $news = new News();
    $news->id = $_POST['id'];
    $news->title = $_POST['title'];
    $news->text = $_POST['text'];
    $news->date = '2016-02-19';
    $news->save();
}