<?php 
    function diagonalDifference($arr) {
    $n = count($arr);
    $rez1=$arr[0][0];
    $rez2=0;
    for ($i=0, $j=0;$i<$n,$j<$n;$i++,$j++){
    
        if ($i=$j){$rez1+=($arr[$i][$j]);}
    }
    
    for ($i=0, $j=$n-1;$i<$n-1,$j>=0;$i++,$j--){
        $rez2+=($arr[$i][$j]);
    }
       return abs($rez1-$rez2);
     
    }

$arr=[[11,2,4],[4,5,6],[10,8,-12]];
$k=diagonalDifference($arr);
echo $k;
?>