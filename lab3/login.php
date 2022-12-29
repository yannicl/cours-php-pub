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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
        }
    </style>

</head>

<body class="text-center">

    <main class="form-signin w-100 m-auto">
        <form action="login.php" method="post">
            <h1 class="h3 mb-3 fw-normal">Se connecter</h1>

            <div class="form-floating mb-3">
                <input class="form-control" type="text" id="fid" name="username" placeholder="identifiant">
                <label for="fid">Identifiant</label>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" type="password" id="fpass" name="password" placeholder="mot de passe">
                <label for="fpass">Mot de passe</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Valider</button>
            <p class="mt-5 mb-3 text-muted">© 2022</p>
        </form>
    </main>

</body>

</html>