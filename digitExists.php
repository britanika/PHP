<?php 
$a=[222, -1234,-200,0,14,67,423,2,-2];
$b=[];
$c=2;
$d=(string)$c;

for($i=0;$i<count($a);$i++){     
    $b[$i]=(string)$a[$i]; 
    $t=strpos($b[$i],$d);
    if($t!==false)
    echo $b[$i]." ";}
?>