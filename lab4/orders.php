<?php
// à compléter
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lab 4 (bonus)">
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
            <li><a href="cart.php" class="nav-link px-2">Vos achats</a></li>
            <li><a href="orders.php" class="nav-link px-2 active">Vos commandes</a></li>
        </ul>

        <div class="col-md-3 text-end me-1">
            <a class="btn btn-outline-primary" href="logout.php" role="button">Quitter</a>
        </div>
    </header>

    <main class="container">

        <?php if (count($orders) != 0) :?>
        <div class="list-group mb-3">
            <?php foreach ($orders as $order) : ?>
                
                <div class="list-group-item">
                    <p><?= date("Y-m-d", strtotime($order["creation_ts"])) ?></p>
                    <p><?= $order["total"] ?>$</p>
                    <p><?= array_sum(array_column($order["products"], "quantity")) ?> article(s)</p>
                    <?php if ($order["status"] == "new"): ?>
                    <form method="POST" id="update_order" action="orders.php">
                        <input type="hidden" name="id" value="<?= $order["id"] ?>">
                        <button type="submit" class="btn btn-link row" name="action" value="cancel">Annuler</button>
                    </form>
                    <?php else: ?>
                        <span class="badge text-bg-secondary">Annulée</span>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
        
        <?php else :?>
        <p>Aucune commande!</p>
        <?php endif;?>

    </main>

</body>

</html>