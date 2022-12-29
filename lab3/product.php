<?php

// à compléter

?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lab 3">
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
            <li><a href="store.php" class="nav-link px-2 active">Le catalogue</a></li>
            <li><a href="cart.php" class="nav-link px-2">Mes achats</a></li>
        </ul>

        <div class="col-md-3 text-end me-1">
            <a class="btn btn-outline-primary" href="logout.php" role="button">Quitter</a>
        </div>
    </header>

    <main class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="store.php">Catalogue complet</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $product->short_name ?></li>
            </ol>
        </nav>
        <div class="row">
            <div class="card mb-3 pb-6 col-6" style="width: 36rem;">
                <div class="card-body">
                    <div class="card-text">
                        <h1><?= $product->name ?></h1>
                    </div>
                    <div class="card-title display-2 text-end">
                        <?= $product->price ?>$
                    </div>
                </div>
            </div>
            <div class="col-2">
            </div>
            <div class="col-4">
                <p class="text-start h2 row"><?= $product->available_quantity ?> en stock</p>
            </div>
        </div>
        <!--
        <h2>A propos de cet article</h2>
        <ul>
            <li></li>
        </ul>
        -->

    </main>

</body>

</html>