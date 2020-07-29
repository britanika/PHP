<?php 
$a=[1,3,8,8,4,5,2,2,6,7,9,10];
$x=2;
$y=8;
$pos1;
$pos2;
for($i=0;$i<count($a);$i++){
    if($a[$i]==$x){$pos1=$i;
    echo $pos1."\n";
    break;}}
 
for($i=0;$i<count($a);$i++){
    if($a[$i]==$y){$pos2=$i;
    echo $pos2."\n";
    break;}}
$sum=1;
if($pos1<$pos2){
for($j=$pos1;$j<=$pos2;$j++){
    $sum*=$a[$j];
}}
else{
    for($j=$pos2;$j<=$pos1;$j++){
        $sum*=$a[$j];    
    }}    
echo $sum; 
?>