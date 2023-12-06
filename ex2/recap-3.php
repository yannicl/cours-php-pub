<!DOCTYPE html>
<html>
<body>
<?php 
const N = 9;
$somme = 0;
for($i = 1; $i <= N; $i++) {
    $x = $i * $i;
    if ($x <= N) {
        $somme += $x;
    } else {
        break;
    }
}
echo $somme;
?>
</body>
</html>
