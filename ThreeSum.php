<?php 
function threeSum($a){
     $n=count($a);
     $m=0;
     for ($i=0; $i<$n; $i++){
         for ($j=$i+1; $j<$n; $j++){
             for ($k=$j+1; $k<$n; $k++){
                 if ($a[$i]+$a[$j]+$a[$k]==0){
                   $m++;
                  
                 }
             }
         }
     }
     return $m;
}

$r=threeSum([30,-50, -20,10,50,20,0,5]);
echo $r;
?>