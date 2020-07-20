<?php
$a = readline();
$b = explode(",", $a);
$sum = 0;
foreach ($b as $k) {

    $c = abs($k % 10);
    $sum += $c;
    $k = ($k - $c) / 10;
    echo $k . "\n";
}
echo "The sum of last digits is ". $sum;
?>