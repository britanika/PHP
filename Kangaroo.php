<?php
// Complete the kangaroo function below.
function kangaroo($x1, $v1, $x2, $v2) {
    if ($x1<0 or $x1>$x2 or $x2>=10000) {echo "0<x1<x2 <=10000!";
                                         return false;}
    if ($v1<1 or $v2<1 or $v1>10000 or $v2>10000) {echo "1<=v1,v2 <=10000!";
                                         return false;}
       $k1=$x1+$v1;
       $k2=$x2+$v2;
       for ($i=0;$i<=10000;$i++){
       if ($k1==$k2) {$result="YES";
                      break;}
       $k1+=$v1;
       $k2+=$v2;
       
       if ($k1==$k2) {$result="YES";
                      break;}
       else {$result="NO";}
       }
       return $result;
}  


echo kangaroo (0,3,4,2);
?>