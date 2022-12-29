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
            <li><a href="#" class="nav-link px-2 active">Le catalogue</a></li>
            <li><a href="cart.php" class="nav-link px-2">Mes achats</a></li>
        </ul>

        <div class="col-md-3 text-end me-1">
            <a class="btn btn-outline-primary" href="logout.php" role="button">Quitter</a>
        </div>
    </header>
    <main>
        <h1>Tous nos produits au meilleur prix!</h1>

        <table class="table table-striped">
        <thead>
    <tr>
      <th scope="col">Description</th>
      <th scope="col">Disponibilité</th>
      <th scope="col">Prix</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($products as $product) : ?>
    <tr>
      <td><a href="product.php?id=<?= $product->id ?>"><?= $product->name ?></a></td>
      <?php if ($product->available_quantity > 5) : ?>
        <td><span class="badge text-bg-success">Disponible</span></td>
      <?php elseif ($product->available_quantity > 3) : ?>
        <td><span class="badge text-bg-warning">Quantité limitée</span></td>
      <?php else : ?>
        <td><span class="badge text-bg-secondary">Épuisé</span></td>
      <?php endif; ?>
      <td><?= $product->price ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

    </main>

</body>

</html>