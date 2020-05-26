<?php

function plusMinus($arr) {
    $n=count($arr);
    $plus=[];
    $minus=[];
    $zero=[];
    foreach ($arr as $a) {
        if ($a < 0) {
            array_push($minus,$a);
         
        }
        elseif($a>0) {
            array_push($plus,$a);
    }
    else {array_push($zero,$a);}

}

$p=round((count($plus))/$n, 6);
$m=round((count($minus))/$n, 6);
$z=round((count($zero))/$n, 6);
echo $p."\n";
echo $m."\n";
echo $z."\n";
}

plusMinus([-1,0,1]);


?>