<?php

$magasins = ["Marché Central, QC", "Côte des Neige, QC", "Montréal Bellechasse, QC"];
$magasin = $magasins[0];

setcookie("lang", ""); // détruit le cookie lang
echo "langue: " . $_COOKIE["lang"];

if (isset($_COOKIE["shop"])) {
    $shop_id = intval($_COOKIE["shop"]);
    if ($shop_id >= 0 && $shop_id < count($magasins)) {
        $magasin = $magasins[$shop_id];
    }
}

if (isset($_GET["shop"])) {
    $shop_id = intval($_GET["shop"]);
    if ($shop_id >= 0 && $shop_id < count($magasins)) {
        $magasin = $magasins[$shop_id];
    }
    setcookie("shop", $shop_id, time() + 30 * 24 * 60 * 60); // expires dans 30 jours
}

?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Exercice sauvegarde de la langue dans un cookie">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body class="">
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $magasin ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <?php foreach($magasins as $key => $value) { ?>
                            <li><a class="dropdown-item <?= ($value == $magasin) ? 'active' : '' ?>" href="?shop=<?= $key ?>"><?= $value ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</body>

</html>