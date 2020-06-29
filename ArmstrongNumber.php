<?php
$a = readline("Enter three-digit number: ");
$b = (int) $a;
$b1 = floor($b / 100);
$b2 = floor(($b - $b1 * 100) / 10);
$b3 = floor($b - $b1 * 100 - $b2 * 10);
echo $b1 . "\n" . $b2 . "\n" . $b3 . "\n";
$a1 = pow($b1, 3);
$a2 = pow($b2, 3);
$a3 = pow($b3, 3);
echo $a1 + $a2 + $a3 . "\n";
if (($a1 + $a2 + $a3) == $b) {
    echo "The number is Armstrong's number.";
} else {
    echo "The number is not Armstrong's number.";
}

?>