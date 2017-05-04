<?php
$news = new News();
$news->setTitle($_POST['title']);
$news->setcontent($_POST['content']);
$news->setAuthor("Alex");
$news->setId(-1);
$news->setTypeNews(0);

var_dump($news);

$news->save($news->getId());