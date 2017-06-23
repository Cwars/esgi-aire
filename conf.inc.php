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
    "nbUsername"=>"Le nom d'utilisateur doit faire au moins 2 caractères",
    "usernameUsed"=>"Ce nom d'utilisateur est déjà utilisé",
    "nbLastname"=>"Le nom doit faire au moins 2 caractères",
    "nbFirstname"=>"Le prénom doit faire au moins 2 caractères",
    "nameUsed"=>"Cette personne est déjà inscrite",
    "errorEmail"=>"L'adresse email n'est pas correcte",
    "nbPwd"=>"Le mot de passe doit faire entre 8 et 12 caractères",
    "pw1/pw2"=>"Le mot de passe de confirmation ne correspond pas",
    7=>"Veuillez remplir tous les champs obligatoires",
    "nbTitle"=>"Le titre doit faire au moins 2 caractères",
    "nbContent"=>"Le contenu doit faire au moins 2 caractères",
    "titleUsed"=>"Ce titre est déjà utilisé",
    10=>"10",
    11=>"11"
];