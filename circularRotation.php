<?php
$a=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
$n=3;//the array hould be circularly shifted for $n places
$m=count($a)-$n;
$b=[];
for ($i=0;$i<$m;$i++){
    $b[$i]=$a[$i+$n];
    echo $b[$i]." ";
}
for ($j=0;$j<$n;$j++){
    $b[$j+$m]=$a[$j];
    echo $b[$j+$m]." ";
}
?>