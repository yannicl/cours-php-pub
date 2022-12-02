<!DOCTYPE html>
<html>
<body>
<?php 
const N = 27;
$isPrime = true;
if (N <= 1) {
    $isPrime = false;
} else {
    for($i = 2; $i < N; $i++) {
        if (N % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}
if ($isPrime) {
	echo N . " est premier.";
} else {
	echo N . " n'est pas premier.";
}
?>
</body>
</html>
