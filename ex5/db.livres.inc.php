<?php

require_once 'db.inc.php';

function findAllProducts() {
    global $pdo;
    $products = $pdo->query('SELECT * FROM livres')->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}

function getNumberOfProducts() {
    global $pdo;
    return $pdo->query('SELECT COUNT(*) FROM livres')->fetchColumn();

    // fetch() vous donne
    // ["COUNT(*)" => 26]

    // fetchColumn vous donne
    // 26
}
// $pageIndex (0-based)
function getProductsPage($pageIndex, $itemsPerPage = 5) {
    global $pdo;
    $offset = $pageIndex * $itemsPerPage;
    $stmt = $pdo->prepare('SELECT * FROM livres LIMIT ? OFFSET ?');
    $stmt->execute([$itemsPerPage, $offset]);
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $products;
}

?>