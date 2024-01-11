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
    $nom = isset($_GET['nom']) ? ((rawurldecode($_GET['nom']))) : ("d'Artagnan");
    ?>
    <main>

            <div class="alert alert-success" role="alert">
                Le nom est <?= htmlentities($nom) ?>.
            </div>
            Essayer ce lien pour <a href="echo.php?nom=<?= rawurlencode($nom)  ?>" ><?= htmlentities($nom) ?></a>.

    </main>

</body>

</html>