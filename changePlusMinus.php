<?php

function changePlusMinus()
{
    $a = [2,45,-2,4,7,0,34,23,-11,5,68,-9,1,45,-52,3];
    $b = [];
    $n = count($a);
    for ($i = 0; $i < $n; $i ++) {
        if ($a[$i] != 0) {
            array_push($b, $a[$i]);
        }
    }
    $m = count($b);
    $counter = 0;
    for ($j = 0; $j<$m-1; $j ++) {

        if ((($b[$j] < 0) and ($b[$j + 1] > 0)) or (($b[$j] > 0) and ($b[$j + 1] < 0))) {

            $counter += 1;
        }
    }
    return $counter;
}
$r = changePlusMinus();
echo $r;
?>