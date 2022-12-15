<!DOCTYPE html>
<html>
<body>

<h2>Text input fields</h2>
<?php

//var_dump($_POST);
echo "<br/>";

$estPrenomValide = false;
$prenom = "";

if (isset($_POST['prenom']))
{
	$prenom = htmlentities(trim($_POST['prenom']));

    $estPrenomValide = strlen($prenom) > 2;

    if ($estPrenomValide) {
        echo "Bonjour $prenom";
    } else {
        echo "Prénom invalide";
    }
}

?>

<?php if(! $estPrenomValide) { ?>
<form action="http://localhost/formulaire.php" method="post">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="prenom" value="<?= $prenom ?>"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="nom">
  <input type="submit" value="Submit">
</form>
<?php } ?>

</body>
</html>
