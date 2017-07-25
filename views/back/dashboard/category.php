<?php
//header : Parametrage Json
header('Content-Type: application/json');

// Connection
try {
    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";port=".DB_PORT, DB_USER, DB_PWD);
} catch(Exception $e) {
    die("Erreur SQL : ".$e->getMessage());
}


$query = $db->prepare("SELECT type, COUNT(type) as nbr FROM news GROUP BY type");
$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);

// Renvoie les données
$data = array();
foreach ($result as $row) {
    $data[] = $row;
}

// Affichage des données
print json_encode($data);