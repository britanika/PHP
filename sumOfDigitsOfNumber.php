<?php 
$a=5423167;
$sum=0;
while($a!=0){
    $c=$a%10;
    $sum+=$c;
    $a=($a-$c)/10;
}
echo $sum;
?>