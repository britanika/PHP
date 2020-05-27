<?php
function simpleArraySum($ar) {
     $sum=0;
    foreach ($ar as $num){
        $sum+=$num;
       }
return $sum;
}
echo simpleArraySum([1,2,3,4,10,11]);
?>
