<?php 
/*find the words with max lenght and print them*/
function maxWord(){
$a=readline();
$b=str_word_count($a,1);
$s=[];
foreach ($b as $word){
    $wordlen=strlen($word);
    array_push($s, $wordlen);
}
$f=max($s)."\n";
echo "The max length of word is ".$f;
for($j=0;$j<count($s);$j++){
    if(strlen($b[$j])==$f){echo $b[$j]."\n";}
}}
maxWord();
?>