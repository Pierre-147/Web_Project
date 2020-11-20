<?php 
//nbQ : index de la question (0 :(question 1))
function verifRadio($nbQ, $tabReponse, $tabLabelReponse, $_INPUT)
{
    //on recherche la bonne reponse
    $indexRecherche=0;
    $i=0;
    foreach($tabReponse[$nbQ] as $reponse)
    {
        if($reponse=="1")
            $indexRecherche = $i;
        $i++;
    }
    $bonneReponse = $tabLabelReponse[$nbQ][$indexRecherche];

    //on verifie si la bonne reponse de la base de donnee correspond à la reponse submit
    if (isset($_INPUT))    //$_POST['q'.($nbQ+1)]
    {
        $varRep = urldecode($_INPUT[0]);      //entree de l'utilisateur
        if($varRep == $bonneReponse)
        {
            echo("Bonne réponse");
            return 1;
        }
        else
        {
            echo("Faux la réponse était : ".$bonneReponse);
            return 0;
        } 
    }
    else
    {
        echo("Faux la réponse etait : ".$bonneReponse);
        return 0;
    }         
}

//nbQ : index de la question (0 :(question 1))
function verifCheck($nbQ, $tabReponse, $tabLabelReponse, $_INPUT)
{
    //questionnaire a choix multiples => on recherche le nombre de bonne réponse
    $totalBonneReponse=0;
    foreach($tabReponse[$nbQ] as $reponse)
    {
        if ($reponse =="1")
            $totalBonneReponse++;
    }

    if(isset($_INPUT)!=0)              //$_POST['q'.($nbQ+1)]
    {
        $test = true;      //on initialise un boolean, on suppose que la reponse est vrai sauf si on ne repond rien

        $bonneReponseInput=0;
        //on parcourt les reponses envoyées
        $tabPost = $_INPUT;                 //POST
        foreach($tabPost as $repUser)
        {
            $varRep = urldecode($repUser);      //entre utilisateur

            $indexRecherche=0;
            //on verifie que c'est une bonne reponse
            $i=0;
            foreach($tabLabelReponse[$nbQ] as $labelRep)
            {
                if ($varRep == $labelRep)
                    $indexRecherche=$i;
                $i++;
            }
            if($tabReponse[$nbQ][$indexRecherche] != "1")      //si une mauvaise reponse est detecte => c'est faux
                $test = false; 
            else
                $bonneReponseInput++;       //c'est une bonne reponse =>increment du nombre de bonne reponse
        }
    }
    else
        $test= false;

    if ($test == true && $totalBonneReponse==$bonneReponseInput)        //si il n'y pas eu de mauvaises reponses et qu'on a repondu le bon nombre de bonnes reponses
    {
            echo("Bonne réponse");
            return 1;
    }
    else 
    {
        echo("Faux les réponses étaient : ");
        //on recherche les bonnes réponses
        $i=0;
        $autoVirgule = false;
        foreach($tabLabelReponse[$nbQ] as $reponse)
        {
            if ($tabReponse[$nbQ][$i] == "1")
            {
                if ($autoVirgule)
                    echo(", ");
                echo($reponse);
                $autoVirgule = true;
            }
            $i++;
        }
        return 0;
    }
}

//nbQ : index de la question (0 :(question 1))
function verifSelect($nbQ, $tabReponse, $tabLabelReponse, $_INPUT)
{
    //on recherche la bonne reponse
    $indexRecherche=0;
    $i=0;
    foreach($tabReponse[$nbQ] as $reponse)
    {
        if($reponse=="1")
            $indexRecherche = $i;
        $i++;
    }
    $bonneReponse = $tabLabelReponse[$nbQ][$indexRecherche];

    //on verifie si la bonne reponse de la base de donnee correspond à la reponse submit
    if (isset($_INPUT))            //$_POST['q'.($nbQ+1)]
    {
        $varRep = urldecode($_INPUT);      //POST   //entree de l'utilisateur
        if($varRep == $bonneReponse)
        {
            echo("Bonne réponse");
            return 1;
        }
        else
        {
            echo("Faux la réponse était : ".$bonneReponse);
            return 0;
        } 
    }
    else
    {
        echo("Faux la réponse etait : ".$bonneReponse);
        return 0;
    }              
}

//nbQ : index de la question (0 :(question 1))
function verifInput($nbQ, $tabReponse, $tabLabelReponse, $_INPUT)
{     
    //on recherche la bonne reponse
    $indexRecherche=0;
    $i=0;
    foreach($tabReponse[$nbQ] as $reponse)
    {
        if($reponse=="1")
            $indexRecherche = $i;
        $i++;
    }
    $bonneReponse = $tabLabelReponse[$nbQ][$indexRecherche];
    
    //on verifie si la bonne reponse de la base de donnee correspond à la reponse submit
    if (isset($_INPUT))        //$_POST['q'.($nbQ+1)]
    {
        $varRep = $_INPUT;  //POST    //entree de l'utilisateur
        if($varRep == $bonneReponse)
        {
            echo("Bonne réponse");
            return 1;
        }
        else
        {
            echo("Faux la réponse était : ".$bonneReponse);
            return 0;
        } 
    }
    else
    {
        echo("Faux la réponse etait : ".$bonneReponse);
        return 0;
    } 
}
?>