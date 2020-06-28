<?php 
$a=readline("Enter minutes: ");
$c=(int)$a;
$b=floor($c/60);
$d=$c-$b*60;
echo "That is ".$b."h"." and ".$d." min.";
?>
 