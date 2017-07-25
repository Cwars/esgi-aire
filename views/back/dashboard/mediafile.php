<?php
//header : Parametrage Json
header('Content-Type: application/json');

// Connection
try {
    define("DB_NAME", "mvciw1");
    define("DB_USER", "root");
    define("DB_PWD", "3iw1Esgi%75013");
    define("DB_PORT", "3306");
    define("DB_HOST", "127.0.0.1");
    
    $this->db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";port=".DB_PORT, DB_USER, DB_PWD);
} catch(Exception $e) {
    die("Erreur SQL : ".$e->getMessage());
}

// Requête pour obtenir des données de la table

$query = $db->prepare("SELECT type, COUNT(type) as nbr FROM mediafile WHERE isDeleted = 0 GROUP BY type");
$query->execute();

$result = $query->fetchAll(PDO::FETCH_ASSOC);

// Renvoie les données
$data = array();
foreach ($result as $row) {
    $data[] = $row;
}

// Affichage des données
print json_encode($data);