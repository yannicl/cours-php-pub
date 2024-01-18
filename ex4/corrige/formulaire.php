<!DOCTYPE html>
<html>
<body>

<h2>Text input fields</h2>
<?php

echo "<br/>";

// Nouveau formulaire lorsque le formulaire est obtenu en GET
$estNouveauFormulaire = true;

$estPrenomValide = false;
$estNomValide = false;
$prenom = "";
$nom = "";

if (isset($_POST['prenom']))
{
	$prenom = htmlentities(trim($_POST['prenom']));
    $estPrenomValide = strlen($prenom) > 2;  
    $estNouveauFormulaire = false;
}

if (isset($_POST['nom']))
{
	$nom = htmlentities(trim($_POST['nom']));
    $estNomValide = strlen($nom) > 2;   
}

$estFormulaireValide = $estPrenomValide && $estNomValide;

if ($estFormulaireValide) {
    echo "Bonjour $prenom $nom";
} else if (!$estNouveauFormulaire) {
    if (! $estPrenomValide)
    {
        echo "(!) Prénom invalide" . "<br/>";
    }
    if (! $estNomValide)
    {
        echo "(!) Nom invalide" . "<br/>";
    }
}

?>

<?php if(! $estFormulaireValide) { ?>
<form action="formulaire.php" method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="prenom" value="<?= $prenom ?>"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="nom" value="<?= $nom ?>">
  <input type="submit" value="Submit">
</form>
<?php } ?>

</body>
</html>