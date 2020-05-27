<?php 
function aVeryBigSum(array$ar) {

    $k=array_sum($ar);
    return $k;
}
$ar=[100001,100002,100003,100004,100005];
$s=aVeryBigSum($ar);
echo $s;
?>