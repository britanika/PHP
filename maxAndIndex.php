<?php
define("MAX_SIZE", 100);
$a = readline("Enter the size of array: ");
$b = (int) $a;
$d = [];
if ($b > 100) {
    echo "The max size of array is 100. Try again.";
    die();
} else if ($b == 0) {
    echo "The  size of array cant't be zero. Try again.";
    die();
}
for ($i = 0; $i < $b; $i ++) {
    $r = readline();
    $r1 = (int) $r;
    array_push($d, $r1);
}
$s = max($d);
$counter = 0;
for ($i = 0; $i < $b; $i ++) {
    if ($d[$i] == $s) {
        $counter += 1;
        echo "The index of max is ".$i . "\n";
    }
}
echo "The max is " . $s . " and there are " . $counter . " same max values in array.";
?>