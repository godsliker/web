<?php
$x = 10;
$y = rand(2,0);
if ($y == 0) {
    echo "division par zero imoossible";
}
else {
    $d = $x/$y;
    echo "la division est $d";
}
?>