<?php


$score = 0;     //score
$total = 0;     //combien de question

$i=0;
foreach($tabValidation as $question)
{   
    $score+=verifQuiz($i, $tabValidation, $tabAnswer, false);
    $i++;
}

$total = $i;
?>