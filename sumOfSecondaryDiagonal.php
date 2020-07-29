<?php
function secondaryDiagonal(){
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

    $sumS=0;
    for ($i = 0; $i < $c; $i ++) {
        for ($j = 0; $j <$c; $j ++) {
            if($j==$c-$i-1){$sumS+=$matrix[$i][$j];echo $matrix[$i][$j]."\n";}
         
        };
    }
    return $sumS;
}
echo "The sum of the elements on the secondary diagonal is ".secondaryDiagonal();
?>

