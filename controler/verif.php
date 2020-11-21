<?php
function verif($nbQuestion, $tabGoodAnswer, $tabInput, $display)
{
    $repOk = $tabGoodAnswer[$nbQuestion];

    $isOk = true;
    foreach($repOk as $elem)
    {
        var_dump($tabInput);
        echo($elem[1]);
        if (!in_array($elem[1], $tabInput))
        {
            $isOk = false;
        }
    }

    if ($isOk == false)
    {
        echo("Faux les reponses etaient :");
        foreach($repOk as $rep)
            echo($rep[1]);
    }
    else
        echo("Juste");
}
?>