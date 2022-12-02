<!DOCTYPE html>
<html>
<body>
<?php 
const N = 5125876;
$N = N;
$sum = 0;
do {
    $r = $N % 10;
    $N = $N - $r;
    $N = $N / 10;
    $sum += $r;
} while ($N != 0);
echo $sum;
?>
</body>
</html>
