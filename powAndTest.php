<?php 
function powAndTest($a,$p){
       $res=1;
    for ($i=1;$i<=$p;$i++){
       $res*=$a;
    }
    return $res;
}
$r=powAndTest(5,7);
$s=pow(5,7);
echo $r."\n";
echo $s."\n";
if ($r==$s){echo "Correct.";}
?>