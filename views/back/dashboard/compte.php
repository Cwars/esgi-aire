<?php
//header : Parametrage Json
header('Content-Type: application/json');

define("DB_NAME", "mvciw1");
define("DB_USER", "root");
define("DB_PWD", "");
define("DB_PORT", "3306");
define("DB_HOST", "127.0.0.1");

// Connection
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);
if(!$mysqli){
    die("Connexion échoué: " . $mysqli->error);
}

// Requête pour obtenir des données de la table
$query = sprintf("SELECT status, COUNT(status) as nbr FROM user WHERE isDeleted = 0 GROUP BY status");

// Exécution de la requête
$result = $mysqli->query($query);

// Renvoie les données
$data = array();
foreach ($result as $row) {
    $data[] = $row;
}

//Mémoire libre associée au résultat
$result->close();

$mysqli->close();

// Affichage des données
print json_encode($data);