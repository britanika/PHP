<?php
$a = readline();
$b = (int) $a;
for ($i = 1; $i <= $b; $i ++) {
    for ($j = 1; $j <= $i; $j ++) {
        echo "*";
    }
    echo "\n";
}
?>