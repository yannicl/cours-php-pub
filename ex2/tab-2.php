<!DOCTYPE html>
<html>
<body>
<?php 
$array = [
    [9, 5, 7],
    [4, 3, 2],
    [1, 6, 8]
];
$sum = 0;
foreach($array as $row) {
    foreach($row as $n) {
        $sum += $n;
    }
}
echo "Somme : " . $sum;
?>
</body>
</html>
