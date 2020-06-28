<?php
$a = readline("Enter the number: ");
$b=str_split($a);
$sum=0;
foreach($b as $r){
    $sum+=$r;
}
echo "The sum of digits is ".$sum;
?>