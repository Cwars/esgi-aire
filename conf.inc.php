<?php

define("DS", DIRECTORY_SEPARATOR);
define("PATH_RELATIVE", "/projetannuelaire/");
define("PATH_RELATIVE_PATTERN", "\/projetannuelaire");

define("DB_NAME", "mvciw1");
define("DB_USER", "root");
define("DB_PWD", "root");
define("DB_PORT", "3306");
define("DB_HOST", "localhost");

$msgError = [
    1=>"Le nom d'utilisateur doit faire au moins 2 caractères",
    2=>"Le nom doit faire au moins 2 caractères",
    3=>"Le prénom doit faire au moins 2 caractères",
    4=>"L'adresse email n'est pas correcte",
    5=>"Le mot de passe doit faire entre 8 et 12 caractères",
    6=>"Le mot de passe de confirmation ne correspond pas",
    7=>"Veuillez remplir tous les champs obligatoires"
];