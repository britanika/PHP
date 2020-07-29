<?php 
function writeNumbersByWords($number){
    $words=[];
    while($number){
        $s=$number%10;
        switch($s){
            case 0: array_push ($words, "zero ");
            break;
            case 1: array_push ($words, "one ");
            break;
            case 2: array_push ($words, "two ");
            break;
            case 3: array_push ($words, "three ");
            break;
            case 4: array_push ($words, "four ");
            break;
            case 5: array_push ($words, "five ");
            break;
            case 6: array_push ($words, "six ");
            break;
            case 7: array_push ($words, "seven ");
            break;
            case 8: array_push ($words, "eight ");
            break;
            case 9: array_push ($words, "nine ");
            break;
            
        }
        $number=($number-$s)/10;
    }
    for ($i=count($words)-1;$i>=0;$i--){
        echo $words[$i];}
   
}
writeNumbersByWords(12345);
?>