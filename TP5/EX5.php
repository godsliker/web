<?php
$arr = array(1,2,3,4,5,6,7,8,9);
foreach($arr as $i)
{
    echo $i;
}
echo "\n";
print_r($arr);
echo "\n";
for ($j=0; $j < count($arr) ; $j++) { 
    echo $arr[$j];
}
?>