<?php

// XAMPP
//const DB_HOST = "localhost";
//const DB_NAME = "php_test";
//const DB_USER = "root";
//const DB_PASS = "";

// Serveur distant
//const DB_HOST = "db";
//const DB_NAME = "sitexx";
//const DB_USER = "sitexx";
//const DB_PASS = "database password";


// MYSQL
const DB_HOST = "localhost";
const DB_NAME = "demo";
const DB_USER = "root";
const DB_PASS = "123456";

$dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
     $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
} catch (PDOException $e) {
     throw new PDOException($e->getMessage(), (int)$e->getCode());
}





?>
