<?php

function naturalLogarithm()
{
    $a = readline("Enter x: ");
    $k = readline("Enter the number of iterations: ");
    $x = (float) $a;
    $n = (int) $k;
    if ($x < - 1 or $x >= 1) {
        echo "X must be in interval (-1,1]";
    }
    $log1 = 0;
    for ($i = 1; $i <= $n; $i ++) {

        $log1 += pow(- 1, $i - 1) * pow($x, $i) / $i;
    }
    $s = 1 + $x;
    $log2 = log($s);
    $res = $log1 - $log2;
    echo "Logarithm by iterations is " . $log1 . "\n";
    echo "Logarithm by math function log is " . $log2 . "\n";
    return $res;
}
$f = naturalLogarithm();

echo "The difference in results is " . $f;
?>