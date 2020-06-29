<?php 
$a=readline("Enter the number: ");
$n=strlen($a);
$b=str_split($a);
$sum=$b[0]+$b[$n-1];
echo $sum;
?>