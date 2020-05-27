<?php 

function MinInArr ($a){
  
        $n = count($a);
        $Min = $a[0];
        for ($i = 1; $i < $n; $i++){
            if ($Min > $a[$i]) {$Min = $a[$i];}       
    }
    return $Min;
}

$a=[-2,-5,8,-8,0,-30];
echo MinInArr($a);

// $Min=min($a); function min($arr) exists in php and we could use it

?>
