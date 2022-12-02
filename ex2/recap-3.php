<!DOCTYPE html>
<html>
<body>
<?php 
const N = 29;
if (N <= 1) {
    echo "non géré";
} else {
    for($i = 2; $i < N; $i++) {
        $carre = $i * $i;
        if ($carre <= N) {
            $sum += $carre;
        } else {
            break;
        }
    }
}
echo $sum;
?>
</body>
</html>
