<?php 
$a=readline();
$b=readline();
$c=readline();

$array=[$a,$b,$c];
sort($array);
foreach ($array as $r)
    echo $r."\n";
$res=$c-$b;
echo "The difference between two bigest number is ".$res.".";
?>