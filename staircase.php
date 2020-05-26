<?php
function staircase($n) {
    
       for ( $i =1 ; $i<=$n;$i++) {
        for ( $j = 1; $j <= ($n-$i);$j++) {
                echo " ";
        }
        for ( $k = 1; $k <= $i;$k ++ ) {
                echo "#";
        }
        echo "\n";
}
}
staircase(4);
?>