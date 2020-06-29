<?php 
$a=readline("Enter four-digit number: ");
$b=(int)$a;
$b1=floor($b/1000);
$b2=floor(($b-$b1*1000)/100);
$b3=floor(($b-$b1*1000-$b2*100)/10);
$b4=floor($b-$b1*1000-$b2*100-$b3*10);
$res=$b1*$b2*$b3*$b4;
echo "The multiplication of digits is " .$res;
?>
