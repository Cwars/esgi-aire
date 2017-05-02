<?php
$news = new News();
$news->setTitle($_POST['title']);
$news->setcontent($_POST['content']);
$news->setauthor("Alex");

$action -> newsAdd($news->getcontent(),$news->getTitle(),$news->setTypeNews($_POST['type']));