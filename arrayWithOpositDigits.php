<?php 
$a=[546,-23,-45789,56,78,0,123456,120];
$b=[];
$c=[];
for($i=0;$i<count($a);$i++){
    if ($a[$i]<0){
        $a[$i]=abs($a[$i]);
        $b[$i]=(string)$a[$i];
        $c[$i]=strrev($b[$i]);
        echo "-".$c[$i]." ";
    }
    else {
    $b[$i]=(string)$a[$i];
    $c[$i]=strrev($b[$i]);
    echo $c[$i]." ";
}
}
?>