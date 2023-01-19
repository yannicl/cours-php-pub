<?php 
require_once '../../../config.php';

// XAMPP
//const DB_HOST = "localhost";
//const DB_NAME = "php_test";
//const DB_USER = "root";
//const DB_PASS = "";

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

function findAllUsers() {
     global $pdo;
     $products = $pdo->query('SELECT * FROM users')->fetchAll(PDO::FETCH_OBJ);
     return $products;
 }

 function updateUserStatus($userId, $newStatus) {
     global $pdo;
     $stmt = $pdo->prepare('UPDATE users SET status = :status WHERE id = :id');
     $stmt->execute(["id" => $userId, "status" => $newStatus]);
 }

 function blockUser($userId) {
     updateUserStatus($userId, "blocked");
 }

 function verifyUser($userId) {
     updateUserStatus($userId, "verified");
 }


?>
