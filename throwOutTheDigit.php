<?php 
$a=112950034907;
$w=0;
$b=[];
$g=[];
while($a!=0){
    $c=$a%10;
    if($c!=$w){
        array_push($b,$c);}
    $a=($a-$c)/10;
}

    for($j=count($b)-1;$j>=0;$j--){
        array_push($g, $b[$j]);
    }

foreach($g as $q){
    echo $q;
}
?>