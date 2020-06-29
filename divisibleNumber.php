<?php
$a = readline("Enter first number: ");
$b = readline("Enter second number: ");
$c = (int) $a;
$d = (int) $b;
if ($d == 0) {
    echo "Division by zero is not allowed.";
} else if ($c % $d == 0) {
    $res = $c / $d;
    echo "The result is " . $res . "."."\n";
    echo "First number is divisible by second number.";
} else {
    $res = $c / $d;
    echo "THe result is " . $res .".". "\n";
    echo "First number is not divisible by second number.";
}
?>
