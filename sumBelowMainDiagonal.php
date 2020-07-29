<?php
function belowMainDiagonal(){
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

    $sumG=0;
    for ($i = 0; $i < $c; $i ++) {
        for ($j = 0; $j < $c; $j ++) {
            if($i>$j){$sumG+=$matrix[$i][$j];}
        }
    }
    return $sumG;
}
echo "The sum of the elements below the main diagonal of the matrix is  ".belowMainDiagonal();
?>

