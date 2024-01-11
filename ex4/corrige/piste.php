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

    <?php
    $x = isset($_GET['x']) ? intval($_GET['x']) : 0;
    $y = isset($_GET['y']) ? intval($_GET['y']) : 0;


    $found = false;
    if ($x == 4 && $y == 3) {
        $found = true;
    }

    ?>
    <main>
        <?php if ($found) : ?>
            <div class="alert alert-success" role="alert">
                Vous avez trouvé! C'était bien (4, 3).
            </div>
        <?php else : ?>
            <div class="alert alert-info" role="alert">
                Vous êtes à <?= abs($x - 4) + abs($y - 3) ?> pas de l'objectif.
            </div>
        <?php endif; ?>
        <div class="container text-center">
            <div class="row">
                <div class="col-4">
                </div>
                <div class="col-4">
                    <a class="btn btn-primary" href="piste.php?x=<?= $x ?>&y=<?= $y + 1 ?>" role="button">Haut</a>
                </div>
                <div class="col-4">
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <a class="btn btn-primary" href="piste.php?x=<?= $x - 1 ?>&y=<?= $y ?>" role="button">Gauche</a>
                </div>
                <div class="col-4">
                    <a class="btn btn-primary" href="piste.php?x=<?= $x ?>&y=<?= $y - 1 ?>" role="button">Bas</a>
                </div>
                <div class="col-4">
                    <a class="btn btn-primary" href="piste.php?x=<?= $x + 1 ?>&y=<?= $y ?>" role="button">Droite</a>
                </div>
            </div>
        </div>

    </main>

</body>

</html>