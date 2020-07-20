<?php
function evenOrOdd($b)
{
    $c = $b % 2;
    if ($c == 0) {
        echo "The number is even." . "\n";
        return 0;
    } else {
        echo "The number is odd." . "\n";
        return 1;
    }
}
$r = evenOrOdd(12);
echo $r;
?>