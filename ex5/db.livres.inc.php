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

// enregistrement d'un nouveau livre (produit sous forme de tableau) (formulaire en ligne)
function saveNewProduct(array $produit) {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO livres ( code_barre, titre, editeur, format) VALUES (:code_barre, :titre, :editeur, :format)");
    $stmt->execute($produit);
    echo 'insert done with id ' . $pdo->lastInsertId() . "\n";
}

function saveNewProductFromRawData($codeBarre, $titre, $editeur, $format) {
    $produit = ['code_barre'=> $codeBarre, 'titre'=> $titre, 'editeur'=> $editeur, 'format'=> $format];
    return saveNewProduct($produit);
}

?>