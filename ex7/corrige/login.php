<?php
session_start();

$users = [
    ["userId" => 0, "username" => "Jean", "password" => "1234", "role" => "user"],
    ["userId" => 1, "username" => "Jacques", "password" => "2345", "role" => "user"],
    ["userId" => 2, "username" => "Paul", "password" => "4567", "role" => "admin"]
];

function authenticateAndRetrieveUser($username, $password)
{
    global $users;
    foreach ($users as $user) {
        if ($user["username"] === $username && $user["password"] === $password) {
            return $user;
        }
    }
    throw new Exception("Invalid credentials");
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    try {
        $user = authenticateAndRetrieveUser($_POST['username'], $_POST['password']);
        $_SESSION['user'] = $user;
    } catch (Exception $e) {
    }
}

if (isset($_SESSION['user'])) {
    header('Location: store.php');
    exit;
}

// gestion de la langue à l'aide d'un cookie langue nommé "lang"
// possibilité de changer de langue via le paramètre d'url "lang"

$langue = "fr";

if (isset($_COOKIE["lang"])) {
    if ($_COOKIE["lang"] == "fr") {
        $langue = "fr";
    } else if ($_COOKIE["lang"] == "en") {
        $langue = "en";
    }
}

if (isset($_GET["lang"])) {
    if ($_GET["lang"] == "fr") {
        $langue = "fr";
    } else if ($_GET["lang"] == "en") {
        $langue = "en";
    }
    setcookie("lang", $langue, time() + 60 * 60 * 24 * 30); // expire dans 1 mois
}
?>

<!doctype html>
<html lang="<?= $langue ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Exercice page de login et logout">
    <meta name="author" content="Yannic Luyckx">
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

    <?php if ($langue == "fr") : ?>

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
                <div class="mt-3 mb-3 block"><a href="login.php?lang=en">English version</a></div>
                <p class="mt-3 mb-3 text-muted">© 2022</p>
            </form>
        </main>

    <?php elseif ($langue == "en") : ?>

        <main class="form-signin w-100 m-auto">
            <form action="login.php" method="post">
                <h1 class="h3 mb-3 fw-normal">Login</h1>

                <div class="form-floating mb-3">
                    <input class="form-control" type="text" id="fid" name="username" placeholder="username">
                    <label for="fid">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input class="form-control" type="password" id="fpass" name="password" placeholder="password">
                    <label for="fpass">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Enter</button>
                <div class="mt-3 mb-3 block"><a href="login.php?lang=fr">Version française</a></div>
                <p class="mt-3 mb-3 text-muted">© 2022</p>
            </form>
        </main>

    <?php endif; ?>

</body>

</html>