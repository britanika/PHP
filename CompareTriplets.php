<?php
function compareTriplets(array$a, array$b) {
  
    $m=0;
    $n=0;
    $result=[];
    for($i=0;$i<3;$i++){
        
        
    if ($a[$i]>$b[$i]) {$m+=1;$n+=0;}
    
    elseif ($a[$i]<$b[$i]) {$n+=1;$m+=0;}
          
    elseif  ($a[$i]=$b[$i]) {$n+=0;$m+=0;}
    }
   echo $m." ".$n;
}

$a=[5,6,7];
$b=[3,6,10];
compareTriplets($a,$b);

?>