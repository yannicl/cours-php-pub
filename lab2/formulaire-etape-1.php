<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Lab 2">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="">

    <?php

        // compléter ici

    ?>
    <main>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </symbol>
        </svg>

        <div class="container">
        <h1>Demande de passeport générale pour enfant</h1>    
        <h2>1. Renseignements personnels sur l'enfant</h2>
        <!-- ajouter la classe d-none pour masquer le div suivant -->
        <div class="alert alert-danger d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Attention:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
            Le formulaire n'est pas correctement rempli. Veuillez corriger et soumetre à nouveau.
        </div>
        </div>
        <!-- ajouter la classe d-none pour masquer le div suivant -->
        <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Succès:"><use xlink:href="#exclamation-triangle-fill"/></svg>
        <div>
            Votre demande est soumise avec succès.
        </div>
        </div>
        <form action="formulaire-etape-1.php" method="post">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom de famille que vous désirez inscrire sur le passeport</label>
                <!-- ajouter la classe is-valid pour afficher un feedback valide à l'input suivant -->
                <!-- ou ajouter la classe is-invalid pour afficher un feedback valide à l'input suivant -->
                <input type="text" class="form-control is-valid" name="nom" id="nom" maxlength="40" value="">
                <!-- afficher si le champ est valide -->
                    <div class="valid-feedback">
                        Parfait!
                    </div>
                <!-- afficher si le champ est invalide -->
                <!--    <div class="invalid-feedback">
                        Le nom doit avoir au moins 3 caractères et un maximum de 40 caractères.
                    </div>
                -->
            </div>
            <div class="mb-3 has-validation">
                <label for="prenom" class="form-label">Prénom(s) que vous désirez inscrire sur le passeport</label>
                <!-- ajouter la classe is-valid pour afficher un feedback valide à l'input suivant -->
                <!-- ou ajouter la classe is-invalid pour afficher un feedback valide à l'input suivant -->
                <input type="text" class="form-control is-invalid" name="prenom" id="prenom" value="">
                <!-- afficher si le champ est valide -->
                <!--
                    <div class="valid-feedback">
                        Parfait!
                    </div>
                -->
                <!-- afficher si le champ est invalide -->
                    <div class="invalid-feedback">
                        Le prénom doit avoir au moins 3 caractères et un maximum de 40 caractères.
                    </div>
            </div>
            <div class="form-label">Lieu de naissance</div>
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="villeNaissance" id="villeNaissance" placeholder="Ville" aria-label="Ville">
              <span class="input-group-text">&nbsp;</span>
              <input type="text" class="form-control" name="paysNaissance" id="paysNaissance" placeholder="Pays" aria-label="Pays">
            </div>
            <div class="mb-3">
                <label for="dateNaissance" class="form-label">Date de naissance</label>
                <input type="date" class="form-control" name="dateNaissance" id="dateNaissance">
            </div>
            <div class="mb-3">
            <label for="sexe" class="form-label">Sexe</label>
            <select class="form-select" aria-label="Sexe" id="sexe" name="sexe">
                <option value="" selected></option>
                <option value="F">Féminin</option>
                <option value="M">Masculin</option>
                <option value="X">Un autre genre</option>
            </select>
            </div>
            <div class="form-label">Adresse actuelle du lieu de résidence</div>
            <div class="input-group mb-3">
              <input type="text" class="form-control" name="adresseNumero" id="adresseNumero" placeholder="Numéro" aria-label="Numéro">
              <span class="input-group-text">&nbsp;</span>
              <input type="text" class="form-control" name="adresseRue" id="adresseRue" placeholder="Rue" aria-label="Rue">
              <span class="input-group-text">&nbsp;</span>
              <input type="text" class="form-control" name="adresseApp" id="adresseApp" placeholder="App." aria-label="Appartement">
              <span class="input-group-text">&nbsp;</span>
              <input type="text" class="form-control" name="adresseVille" id="adresseVille" placeholder="Ville" aria-label="Ville">
              <span class="input-group-text">&nbsp;</span>
              <input type="text" class="form-control" name="adresseProv" id="adresseProv" placeholder="Prov./Terr./État" aria-label="Province, territoire ou état">
            </div>
            <input type="submit" class="btn btn-primary" name="action" value="Continuer">
        </form>
        </div>
    </main>

</body>

</html>