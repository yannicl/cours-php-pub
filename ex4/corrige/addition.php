<?php
if (isset($_POST["a"]) && $_POST["a"] !== "") {
    $a = intval($_POST["a"]);
} else {
    $a = "";
}
if (isset($_POST["b"]) && $_POST["b"] !== "") {
    $b = intval($_POST["b"]);
} else {
    $b = "";
}
if (is_numeric($a) && is_numeric($b)) {
    $c = $a + $b;
} else {
    $c = "";
}
if (isset($_POST["action"]) && $_POST["action"] === "delete") {
    $a = ""; $b = ""; $c = "";
}
?>
<!DOCTYPE html>
<html>

<body>

<main>
    <form action="addition.php" method="post">
        +<input type="text" id="a" name="a" value="<?=$a?>"><br>
        +<input type="text" id="b" name="b" value="<?=$b?>">
        <input type="submit" value="Calculer">
        <button type="submit" name="action" value="delete">Effacer tout</button>
    </form>
    <hr>
    = <?= $c ?>
</main>

</body>

</html>