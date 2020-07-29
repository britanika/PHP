<?php 
/*replace string str1 with string str2 in string s*/
function changeString(){
$a=readline();
$a1=strtolower($a);
$b=readline();
$b1=strtolower($b);
$b2=strlen($b);
$a2=strlen($a);
$k=readline();
$r=substr_count($a1,$b1);
echo "The str2 appears in str  ".$r." times.\n";
echo str_replace($b1,$k,$a1);
}
changeString();
?>