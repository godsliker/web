<!DOCTYPE html>
<html>
<style>
table, tr, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
<body>
<?php
echo "<table>";
echo "<tr>";
$j=10;
$r = 0;
for ($i=1; $i <= 10 ; $i++) { 
    $r = $j +$i;
    echo "<td> $i + $j = $r </td>";
    $j = $j - 1;
}
echo "</tr>";
echo "</table>";
?>
</body>
</html>