<?php
session_start();
header("Access-Control-Allow-Origin: *");
require "conf.inc.php";

spl_autoload_register(function ($class) {
    if (file_exists('core/' . $class . '.class.php'))
        require 'core/' . $class . '.class.php';
    else if (file_exists('models/' . $class . '.class.php'))
        require 'models/' . $class . '.class.php';
});

$routing = new Routing();

// echo "<pre>";
// print_r($routing);
// echo "</pre>";
