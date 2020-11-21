<?php
//on rajoute les fonctions de verification
include('controler/fonctionVerifQuiz.php');

$score = 0;     //score
$total = 0;     //combien de question
$i=0;
foreach($tabQuestion as $question)
{
    switch($tabTypeQuestion[$i])
    {
        case "radio":
            $score = verifRadio($i, $tabReponse, $tabLabelReponse, $_POST['q'.($i+1)], false);
            break;
        case "checkbox":
            $score = verifCheck($i, $tabReponse, $tabLabelReponse, $_POST['q'.($i+1)], false);
            break;
        case "select":
            $score = verifSelect($i, $tabReponse, $tabLabelReponse, $_POST['q'.($i+1)], false);
            break;
        case "input":
            $score = verifInput($i, $tabReponse, $tabLabelReponse, $_POST['q'.($i+1)], false);
            break;
    }
    $i++;
}
$total = $i;
?>