<?php
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