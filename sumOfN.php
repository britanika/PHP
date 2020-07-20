<?php 
function sumOfN($n){
    $sum=0;
    for ($i=0;$i<=$n;$i++){
        $sum+=$i;
    }
    return $sum;
}
$v=sumOfN(12);
echo $v;
?>