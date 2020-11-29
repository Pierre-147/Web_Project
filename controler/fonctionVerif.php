<?php
//fonction permetttant de corriger les reponses d'un quiz
//$nbQuestion : numero de la question (index-1): question 1 => numero 0
//$tabGoodAnswer : tableau de tableau contenant les bonnes reponses à question
//$tabInput : tableau contenant les reponses entrees par l'utilisateur
//$display : boolean determinant si on affiche la correction
//retourne un score 1 si reponse juste, 0 sinon
function verifQuiz($nbQuestion, $tabGoodAnswer, $tabInput, $display)
{
    $repOk = $tabGoodAnswer[$nbQuestion];

    $isOk = true;
    foreach($repOk as $elem)
    {
        if (!in_array($elem[1], $tabInput))
        {
            $isOk = false;
        }
    }

    if ($isOk == false)
    {
        if ($display) echo("Faux les reponses etaient :");
        $autoVirgule = true;
        foreach($repOk as $rep)
        {
            if (!$autoVirgule)
                if ($display) echo(", ");
            if ($display) echo($rep[1]);
            $autoVirgule = false;
        }
        return 0;
    }
    else
    {
        if ($display) echo("Bonne réponse");
        return 1;
    }
}
?>