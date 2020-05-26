<?php
function gradingStudents(array$grades){
    $n=count($grades);
    $final=[];
    $s;
    foreach ($grades as $grade) {
        
        if (((((intdiv($grade, 5)+1)*5) - $grade) <3) and ((intdiv($grade, 5)+1)*5)>=40)
        {
            $s = (intdiv($grade, 5)+1)*5;
            array_push($final,$s);
        }
        elseif ((((((intdiv($grade, 5)+1)*5) - $grade) ==4) and $grade>40)) {
            $s=$grade;
            array_push($final,$s);
        }
        elseif ((((((intdiv($grade, 5)+1)*5) - $grade) ==5) and $grade>=40)) {
            $s=$grade;
            array_push($final,$s);
        }
        elseif ((((intdiv($grade, 5)+1)*5) - $grade) == 3) {
            $s=$grade;
            array_push($final,$s);
        }
        elseif  ($grade <40) {
            $s=$grade;
            array_push($final,$s);
        }
        elseif  ($grade ==100) {
            $s=$grade;
            array_push($final,$s);
        }
    }
    
    foreach ($final as $a) {
        echo $a."\n";
    }
}
gradingStudents([73, 67, 38,33]);

?>
