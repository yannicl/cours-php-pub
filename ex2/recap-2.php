<!DOCTYPE html>
<html>
<body>
<?php 
const N = 100;
$sum = 0;
for($i = 1; $i <= N; $i++) {
    $sum += $i;
    if ($sum <= N) {
        echo $sum . ", ";
    } else {
        break;
    }
}
?>
</body>
</html>
