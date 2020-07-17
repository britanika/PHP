<?php 
$a = readline('Enter the first number: ');
$c=(int)$a;
$tmp=$c;
$b = readline('Enter the second number: ');
$d=(int)$b;
while($tmp>=$d){
   $tmp-=$d;
}
echo "The rest of division is ".$tmp."\n";

echo "II way:"."\n";
$g=intdiv($c,$d);
$r=$c-($g*$d);
echo "The rest of division is ".$r;
?>