<?php 
require_once '../../../config.php';

$dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
} catch (PDOException $e) {
     throw new PDOException("DB Connexion Error", (int)$e->getCode());
}

function authenticateAndRetrieveUser($username, $password) {
    // à compléter
}

function findAllProducts() {
    // à compléter
}

function findProductById($id) {
    // à compléter
}


?>