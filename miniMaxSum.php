<?php
function miniMaxSum($arr) {
 
  $total=array_sum($arr);

       $k=min($arr);
       $rez1=$total-$k;
   
      $v=max($arr);
 
      $rez2=$total-$v;
 
  echo $rez2." ".$rez1;
}

miniMaxSum([1,2,3,4,5]);
?>