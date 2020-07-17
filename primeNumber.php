<?php
$a = readline("Enter the number: ");
$b = (int) $a;
$counter = 0;
for ($i = 1; $i <= sqrt($b); $i ++) {
    
    $c = $b % $i;
    if ($c == 0) {
        $counter += 1;
    }
}
if($counter >1) {
    echo "The number is not prime number.";
} else {
    echo "The number is prime number.";
}
?>