<!DOCTYPE html>
<html>
<body>
<?php 
$array = [
    [9, 5, 7],
    [4, 3, 2],
    [1, 6, 8]
];
$sumRow = [0, 0, 0];
$sumCol = [0, 0, 0];
foreach($array as $i => $row) {
    foreach($row as $j => $n) {
        $sumRow[$i] += $n;
        $sumCol[$j] += $n;
    }
}
echo "Lignes : ";
var_dump($sumRow);
echo "<br />";
echo "Colonnes : ";
var_dump($sumCol);
?>
</body>
</html>
