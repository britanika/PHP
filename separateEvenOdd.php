<?php
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
for ($i = 0; $i < $n; $i ++) {
    $c = $d[$i] % 2;
    if ($c == 0) {
        array_push($even, $d[$i]);
    } else {
        array_push($odd, $d[$i]);
    }
}
echo "Even: ";
for ($j = 0; $j < count($even); $j ++) {
    echo $even[$j] . " ";
}
echo "\n";
echo "Odd: ";
for ($k = 0; $k < count($odd); $k ++) {
    echo $odd[$k] . "  ";
}
?>
