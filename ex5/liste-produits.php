<?php

    require_once 'db.livres.inc.php';

    const PAGE_SIZE = 15;

    $nbrPages = intval(ceil(getNumberOfProducts() / PAGE_SIZE));

    $currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;
    if ($currentPage < 1) {
        $currentPage = 1;
    }
    if ($currentPage > $nbrPages) {
        $currentPage = $nbrPages;
    }
    
    $previousPage = intval(max($currentPage - 1, 1));
    $nextPage = intval(min($currentPage + 1, $nbrPages));

    $produits = getProductsPage($currentPage - 1, PAGE_SIZE);

?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lab 1">
    <meta name="author" content="Yannic Luyckx">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="">
    
    <main>
        <div class="container">
            <ul class="pagination">
                <li class="page-item <?=($previousPage === $currentPage) ? 'disabled' : ''?>">
                <a class="page-link" href="liste-produits.php?page=<?=$previousPage?>" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>$produits
                </li>
                <?php
                for ($i = 1; $i <= $nbrPages; $i++) :
                ?>
                <li class="page-item <?=($i === $currentPage) ? 'active' : ''?>"><a class="page-link" href="liste-produits.php?page=<?=$i?>"><?=$i?></a></li>
                <?php
                endfor;
                ?>
                <li class="page-item <?=($nextPage === $currentPage) ? 'disabled' : ''?>">
                <a class="page-link" href="liste-produits.php?page=<?=$nextPage?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
                </li>
            </ul>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Code-barres</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Editeur</th>
                        <th scope="col">Format</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($produits as $produit) :
                    ?>
                    <tr>
                        <th scope="row"><?=$produit['id']?></th>
                        <td><?=$produit['code_barre']?></td>
                        <td><?=$produit['titre']?></td>
                        <td><?=$produit['editeur']?></td>
                        <td><?=$produit['format']?></td>
                    </tr>
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>

        </div>
    </main>

</body>

</html>