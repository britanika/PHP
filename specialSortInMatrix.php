<?php

/*
 * sort first row of given matrix in ascending order, second row in descending order,
 * third in ascending and so on...
 */
function specialSortInMatrix($a)
{
    $n = count($a);
    $m = count($a[0]);

    for ($i = 0; $i < $n; $i += 2) {
        sort($a[$i]);
    }

    for ($i = 1; $i < $n; $i += 2) {
        rsort($a[$i]);
        echo "\n";
    }
    for ($i = 0; $i < $n; $i ++) {
        for ($j = 0; $j < $m; $j ++) {
            echo $a[$i][$j];
        }
        echo "\n";
    }
}
$a = array(
    array(2,8,6,7),
    array(4,2,6,9),
    array(0,3,5,8), 
    array(6,8,1,5)  
);
specialSortInMatrix($a);
?>