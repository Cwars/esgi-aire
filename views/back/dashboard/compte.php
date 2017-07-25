<?php
//header : Parametrage Json
header('Content-Type: application/json');

// Connection
try {
    $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";port=".DB_PORT, DB_USER, DB_PWD);
} catch(Exception $e) {
    die("Erreur SQL : ".$e->getMessage());
}

// Requête pour obtenir des données de la table

$query = $db->prepare("SELECT status, COUNT(status) as nbr FROM user WHERE isDeleted = 0 GROUP BY status");
$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);

// Renvoie les données
$data = array();
foreach ($result as $row) {
    $data[] = $row;
}

// Affichage des données
print json_encode($data);