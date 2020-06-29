<?php
$a = readline("Enter k1 for the first line: ");
$b = readline("Enter n1 for the first line: ");
$c = readline("Enter k2 for the second line: ");
$d = readline("Enter n2 for the second line: ");
echo "Explicit equations of lines are : 
"."\n"."y1=".$a."x+".$b."\n"."y2=".$c."x+".$d."\n"."\n";
if(($a==$c)&&($b==$d)){ echo "The lines are parallel and matching.";}
else if ($a==$c){echo "The lines are parallel.";} 
else if($b==$d){ echo "The lines are matching.";}
else if(($a==$c)&&($b==$d)){ echo "The lines are parallel and matching.";}
else echo "The lines intersect.";
?>