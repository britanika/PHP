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
echo "Your matrix is: "."\n";
for ($i = 0; $i < $c; $i ++) {
    for ($j = 0; $j < $d; $j ++) {
        echo $matrix[$i][$j] . " ";
    }
    echo "\n";
}
echo "\n";
echo "The mirror matrix is: "."\n";
for ($i = 0; $i < $c; $i ++) {
    for ($j = $d-1; $j >=0; $j --) {
      
        echo  $matrix[$i][$j]." ";
    }
    echo "\n";
}




?>