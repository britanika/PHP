<?php
$a = readline("Enter a: ");
$b = readline("Enter b: ");
$operation = readline("Enter the operation:");
$c = (int) $a;
$d = (int) $b;
switch ($operation) {
    case "add":
        $res = $c + $d;
        echo "Result is:" . $res;
        break;
    case "subtraction":
        $res = $c - $d;
        echo "Result is:" . $res;
        break;
    case "multiplication":
        $res = $c * $d;
        echo "Result is: " . $res;
        break;
    case "division":
        if ($d == 0) {
            echo "Division by zero iz not allowed.";
            break;
        } else
            $res = $c / $d;
        echo "Result is: " . $res;
        break;
    case "squareRoot":
        $res1 = sqrt($c);
        $res2 = sqrt($d);
        echo "Result 1 is : " . $res1;
        echo "\n";
        echo "Result 2 is : " . $res2;
        break;
}
?>