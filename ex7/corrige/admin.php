<?php

// vérification des droits
// si aucun utilisateur en session, logout
// si utilisateur non admin, logout

session_start();
if (!isset($_SESSION['user'])) 
{
    header('Location: logout.php');
    exit;
}
$user = $_SESSION['user'];
if ($user["role"] != "admin") {
    header('Location: logout.php');
    exit;
}




// traitement des actions
// action de bloquer un utilisateur
// action de verifier un utilisateur

require_once('db.admin.inc.php');

if (isset($_POST["userId"]) && isset($_POST["action"])) {
    $userId = $_POST["userId"];
    $action = $_POST["action"];

    if ($action == "block") {
        blockUser($userId);
    }

    if ($action == "verify") {
        verifyUser($userId);
    }
    
}


// préparation de la vue

$users = findAllUsers();

?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Exercice creation d'une page d'administration des utilisateurs">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body class="">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Section</a>
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
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nom</th>
                <th scope="col">courriel</th>
                <th scope="col">statut</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user->id ?></td>
                    <td><?= $user->name ?></td>
                    <td><?= $user->email ?></td>
                    <td><?= $user->status ?></td>
                    <td>
                    <form action="admin.php" method="post">
                    <input type="hidden" name="userId" value="<?= $user->id ?>">
                    <button type="submit" class="btn btn-outline-success" name="action" value="verify">Verifier</button>
                    <button type="submit" class="btn btn-outline-danger" name="action" value="block">Bloquer</button>
                    </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

</body>

</html>