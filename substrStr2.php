<?php
/*count subtring and print the position of  occurances*/
$a=readline();
$a1=strtolower($a);
$b=readline();
$b1=strtolower($b);
$b2=strlen($b);
$a2=strlen($a);
$r=substr_count($a1,$b1);
echo "The str2 appears in str1  ".$r." times.\n";
$m=0;
while($a2-$m>0){
$s=strpos($a1,$b1,$m);
if($s==0){
    $m=$m+$s+$b2;}
    else {
        $s=strpos($a1,$b1,$m);
        $m=$m+$s;
    }
    echo $s."\n";}

?>