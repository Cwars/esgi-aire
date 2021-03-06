<?php

define("DS", DIRECTORY_SEPARATOR);
define("PATH_RELATIVE", "/esgi-aire/");
define("PATH_RELATIVE_PATTERN", "\/esgi-aire");
define("NB_ITEM_BACK", 10);
define("NB_ITEM_FRONT", 10);

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
    "NoMediafile"=>"Pas de d'image",
    "badMediaFileType" => "Le format du fichier n'est pas accepté",
    "typeDiff" => "Le nouveau fichier n'est pas du même type que l'ancien",
    10=>"10",
    11=>"11",
    12 => "Identifiant inconnu.",
    13 => "Mot de passe incorrect.",
    14 => "Vous n'avez pas les autorisations pour rentrer ici.",
    15 => "Un caractère interdit s'est glissé quelque part !",
    16 => "Les champs sont obligatoire",
    17 => "Nom d'utilisateur déjà utilisé.",
    18 => "Email déjà utilisé.",
    "cgu" => "Vous devez accepter les conditions générales d'utilisation.",
];

$msgSuccess = [
    "connected"=>"Connexion réussie...",
    "added"=>"L'utilisateur à correctement été ajouté.",
    "added_front"=>"Inscription réussie ! Vous allez recevoir un email de confirmation dans les minutes à venir.\nPensez à vérifier vos courrier indésirable !"
];