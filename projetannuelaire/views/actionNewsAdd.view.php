<?php
$param = new Param();
$param->setAuthor($_POST['author']);
$param->setContent($_POST['content']);

var_dump($param);

$param->save();