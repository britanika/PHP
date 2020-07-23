<?php 
/*The lowest common denominator for 2 numbers/Euclidean algorithm*/
function lowestCommonDenominator (){
$a = readline('Enter the first number: ');
$b = readline('Enter the second number: ');
$c=(int)$a;
$d=(int)$b;
$v=$c*$d;
while($d!=0){
    $tmp=$c;
    $c=$d;
    $d=$tmp%$c;
}
echo "The biggest common divisor is ".$c."\n";
$s=$v/$c;
echo "The lowest common denominator is ".$s;
}
lowestCommonDenominator();
?>
