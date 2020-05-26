<?php
// Complete the countApplesAndOranges function below.
function countApplesAndOranges($s,$t, $a,$b,array$apples, array$oranges) {
       
    if (($a<=$s and $s<$t and $t<=$b) 
    and ($a>=1 and $b<=100000)) {
             
        $app_final=[];
        $orn_final=[];
        $counter1=0; 
        $counter2=0;
        $result=[];
        foreach($apples as $app) {
            
           $app_distance=$app+$a;
           array_push($app_final,$app_distance);
        }
        foreach($oranges as $orn) {
            
            $orn_distance=$orn+$b;
            array_push($orn_final,$orn_distance);
        }
     
        foreach($app_final as $f1){
         
            if ($s<=$f1 and $f1<=$t){
                $counter1+=1;
            }  
        }
        array_push($result,$counter1);
         echo $counter1."\n";
        
        foreach($orn_final as $f2){
           
            if ($s<=$f2 and $f2<=$t){
                $counter2+=1;
            } 
        }
        array_push($result,$counter2);
        echo $counter2;
    }
    else {echo "You have input correct value: a<s<t<b.";}
    
return $result;

}

countApplesAndOranges(7, 11, 5, 15, [-2,2,1], [5,-6]);

?>