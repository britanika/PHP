<?php
function timeConversion($s) {
    $d=strtotime($s);
    $k=date("H:i:s" , $d);  
    return $k;
}
echo timeConversion("07:05:45PM");

?>