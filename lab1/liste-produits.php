<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lab 1">
    <meta name="author" content="Votre nom">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="">

    <?php
    include_once('donnees-produits.php');

    // compléter ici
    //
    // http://cours-php.atwebpages.com/projets/lab1/liste-produits-initial.php

    ?>

    <main>
        <div class="container">
            <ul class="pagination">
                <li class="page-item disabled">
                <a class="page-link" href="liste-produits.php?page=0" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
                </li>
                <li class="page-item active"><a class="page-link" href="liste-produits.php?page=1">1</a></li>
                <li class="page-item disabled">
                <a class="page-link" href="liste-produits.php?page=2" aria-label="Next">
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
                    <tr>
                        <th scope="row">1</th>
                        <td>Exemple</td>
                        <td>Exemple</td>
                        <td>Exemple</td>
                        <td>Exemple</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>