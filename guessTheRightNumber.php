<?php 
//The user has three times to guess the number  from 1 to 10
$a=rand(1,10);
echo $a;
$b=readline("What is the correct number? ");
$c=(int)$b;
if ($c==$a){ exit ("Congratulation!The answer is corect.");}
else if($c<$a){ echo "Your number is less han te selected one.Try again.";}
else { echo "Your number is graeter than te selected one.Try again.";}

$b=readline("Second try: ");
$c=(int)$b;
if ($c==$a){exit ("Congratulation!The answer is corect.");}
else if($c<$a){ echo "Your number is less han te selected one.Try again.";}
else { echo "Your number is graeter than te selected one.Try again.";}

$b=readline("The last try: ");
$c=(int)$b;
if ($c==$a){exit("Congratulation!The answer is corect.");}
else echo "You failed three times, no more tries. The number is ". $a;
?>