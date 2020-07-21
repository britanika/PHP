<?php
define("MAX_SIZE", 100);
$a = readline("Enter the size of array: ");
$b = (int) $a;
if ($b > 100) {
    echo "The max size of array is 100. Try again.";
    die();
} else if ($b == 0) {
    echo "The  size of array cant't be zero. Try again.";
    die();
}

$sum = 0;
for ($i = 0; $i < $b; $i ++) {
    $r = readline();
    $r1 = (int) $r;
    $sum += $r1;
}
echo $sum;
echo "\n";
$g = round($sum / $b, 3);

echo "The medium value of array is " . $g;

?>