<?php
$a = readline();
$b = readline();
$c = (int) $a;
$d = (int) $b;
$matrix=[];
for ($i = 0; $i < $c; $i ++) {
    for ($j = 0; $j < $d; $j ++) {
        $f = readline();
        $r = (int) $f;
        $matrix[$i][$j] = $r;
    }
}
for ($i = 0; $i < $c; $i ++) {
    for ($j = 0; $j < $d; $j ++) {
        echo $matrix[$i][$j] . " ";
    }
    echo "\n";
}
?>
