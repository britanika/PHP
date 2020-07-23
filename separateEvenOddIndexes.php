<?php 
/*separate numbers from array by even/odd indexes*/
$a = readline();
$b = explode(",", $a);
$d = [];
$even = [];
$odd = [];
foreach ($b as $str) {
    $in = (int) $str;
    array_push($d, $in);
}
$n = count($d);
for ($i = 0; $i < $n; $i +=2) {
        array_push($even, $d[$i]); }
for ($i = 1; $i < $n; $i +=2) {
    array_push($odd, $d[$i]);}

echo "Numbers with even indexes: ";
for ($j = 0; $j < count($even); $j ++) {
    echo $even[$j] . " ";
}
echo "\n";
echo "Numbers with odd indexes: ";
for ($k = 0; $k < count($odd); $k ++) {
    echo $odd[$k] . "  ";
}
?>