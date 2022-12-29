<?php
// à compléter

function addProductToCart($id, $quantity)
{
    // à compléter
}

// lorsque la quantité est 0, le produit est retiré du panier
function updateProductQuantity($id, $quantity)
{
    // à compléter
}

require_once('db.inc.php');

// le panier est modélisé par un tableau
// les clés sont les id des produits et la valeur est la quantité associée de ce produit

if (isset($_SESSION['Cart'])) {
    $cart = $_SESSION['Cart'];
} else {
    $cart = [];
    $_SESSION['Cart'] = $cart;
}

?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lab 4">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body class="">


    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                <use xlink:href="#bootstrap"></use>
            </svg>
        </a>

        <ul class="nav nav-pills col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="store.php" class="nav-link px-2">Le catalogue</a></li>
            <li><a href="#" class="nav-link px-2 active">Vos achats</a></li>
            <li><a href="orders.php" class="nav-link px-2">Vos commandes</a></li>
        </ul>

        <div class="col-md-3 text-end me-1">
            <a class="btn btn-outline-primary" href="logout.php" role="button">Quitter</a>
        </div>
    </header>

    <main class="container">

        <h1>Votre panier</h1>
        <?php if (count($cart) != 0) :?>
        <div class="list-group mb-3">
            <?php foreach ($cart as $id => $quantity) : ?>
                <?php 
                    $product = findProductById($id);
                ?>
                <div class="list-group-item">
                    <form method="POST" id="update_cart_form" action="cart.php">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <h2><?= $product->short_name ?></h2>
                        <label for="quantity" class="row">Quantité :</label>
                        <input type="number" class="plaintext row" id="quantity" name="quantity" value="<?= $quantity ?>">
                        <button type="submit" class="btn btn-link row" name="action" value="update">Mettre à jour</button>
                        <button type="submit" class="btn btn-link row" name="action" value="delete">Supprimer</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
        
        <form method="POST" id="pay_cart_form" action="orders.php">
            <button type="submit" class="btn btn-primary" name="action" value="pay_cart">Payer maintenant</button>
        </form>

        <?php else :?>
        <p>Votre panier est vide!</p>
        <?php endif;?>

    </main>

</body>

</html>