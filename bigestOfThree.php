
<?php
$a = readline();
$b = readline();
$c = readline();
$a1 = (int)$a;
$b1 = (int)$b;
$c1 = (int)$c;
$max=$a1;
if($max<=$b1) {$max=$b1;}
if($max<=$c1)  {$max=$c1;}
echo  "Maximum is ".$max;

?>