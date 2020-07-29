<?php 
$a=readline();
$c=strlen($a);
$b=[];
for ($i=0;$i<$c;$i++){
    if($a[$i]!=" "){
        array_push($b,$a[$i]);
    }
}
foreach ($b as $k){
    echo $k;
}

    
?>