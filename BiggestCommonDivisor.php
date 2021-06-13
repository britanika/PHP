<?php 
/*The biggest common divisor for 2 numbers/Euclidean algorithm*/
$a = readline('Enter the first number: ');
$c=(int)$a;
$b = readline('Enter the second number: ');
$d=(int)$b;
while($d!=0){
    $tmp=$c;
    $c=$d;
    $d=$tmp%$c;
}
echo "The biggest common divisor is ".$c;
?>
