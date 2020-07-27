<?php
$a=readline();
$b=strlen($a);
$c=readline("Enter the position from which the string has to be deleted: ");
$d=(int)$c;
$f=readline("How many signs have to be removed? ");
if($d>$b)echo "The string is not that long, so the entered postion doesn't exist";
for ($i=0;$i<$d;$i++){
    echo $a[$i];
}
for ($i=$d+$f;$i<$b;$i++){
    echo $a[$i];
}
?>