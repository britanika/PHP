<?php
function FibonacciSequence($n)
{
    if ($n == 0) {
        return 0;
    } else if ($n == 1 or $n == 2) {
        return 1;
    }

    return FibonacciSequence($n - 1) + FibonacciSequence($n - 2);
}
$s = FibonacciSequence(8);
echo $s;
?>