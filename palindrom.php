<?php 
function palindrom (){
$a=readline();
$b=strrev($a);
if ($a==$b){echo $b." is palindrom";}
}
palindrom();
?>