<?php 
$a=readline();
$a1=strtolower($a);
$b=["a","b","v","g","d","e","z","i","j","k","l","m","n","o","p","r","s","t","u","f","h","c","w","x","q"];
$c=chunk_split($a1,1,",");
$d=explode(",",$c);
for($i=0;$i<count($b);$i++){
$counter[$i]=0;
foreach ($d as $r){
    if($r==$b[$i]){$counter[$i]+=1;}
}
if ($counter[$i]>0){
    echo $counter[$i]." letter ".$b[$i]."\n";}}
?>