<?php
function birthdayCakeCandles($ar) {
    $n=count($ar);
    $m=max($ar);
    $s=0;
    for ($i=0; $i<$n;$i++){
        
        if ($ar[$i]==$m){$s+=1;}
    }
   return $s; 
}
$k=birthdayCakeCandles([4,4,2,3]);
echo $k;

?>