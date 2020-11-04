<head>
    <meta charset="iso-8859-1"/>
    <title>Reponses : <?php echo($title);?></title>
    <link href="../css/quiz1.css" rel="stylesheet"/>
    <link href="../css/body.css" rel="stylesheet"/>
</head>

<div id="content-wrap">
    <h3>Quiz <?php echo($varquiz." : ".$title);?></h3>
    <br/>
    <?php 
    for($i =0; $i<count($tabQuestion); $i++)
    {
    ?>
    <label id="question" for=<?php echo("q".($i+1))?>><?php echo("Question ".($i+1)." ".$tabQuestion[$i]);?></label>
    <div id="reponsePossible">
        <p>
            <?php
            $type = $tabTypeQuestion[$i];      //type de reponse 
            if ($type == 1)
            {
                verifRadio($i, $tabReponse, $tabLabelReponse);
            }
            else if ($type == 2)
            {
                verifCheck($i, $tabReponse, $tabLabelReponse);
            }
            else if ($type == 3)
            {
                verifSelect($i, $tabReponse, $tabLabelReponse);
            }
            else if($type == 4)
            {
                verifInput($i, $tabReponse, $tabLabelReponse);
            }     
            ?>
        </p>
    </div>
    <?php
    }
    ?>
</div>


<?php 
//nbQ : index de la question (0 :(question 1))
function verifRadio($nbQ, $tabReponse, $tabLabelReponse)
{
    //on recherche la bonne reponse
    $indexRecherche=0;
    for($i=0; $i<count($tabReponse[$nbQ]);$i++)
    {
        if ($tabReponse[$nbQ][$i]=="1")
        {
            $indexRecherche=$i;
        }
    }
    $bonneReponse = $tabLabelReponse[$nbQ][$indexRecherche];

    //on verifie si la bonne reponse de la base de donnee correspond à la reponse submit
    if (isset($_POST['q'.($nbQ+1)]))
    {
        $varRep = urldecode($_POST['q'.($nbQ+1)]);      //entree de l'utilisateur
        if($varRep == $bonneReponse)
        {
            echo("Bonne réponse");
        }
        else
        {
            echo("Faux la réponse était : ".$bonneReponse);
        } 
    }
    else
    {
        echo("Faux la réponse etait : ".$bonneReponse);
    }         
}

//nbQ : index de la question (0 :(question 1))
function verifCheck($nbQ, $tabReponse, $tabLabelReponse)
{    
    //questionnaire a choix multiples => on recherche le nombre de bonne réponse
    $totalBonneReponse=0;
    for($i=0;$i<count($tabReponse[$nbQ]); $i++)
    {
        if ($tabReponse[$nbQ][$i]=="1")
            $totalBonneReponse++;
    }

    if(isset($_POST['q'.($nbQ+1)])!=0)
    {
        $test = true;      //on initialise un boolean, on suppose que la reponse est vrai sauf si on ne repond rien

        $bonneReponseInput=0;
        //on parcourt les reponses envoyées
        for ($i = 0; $i< count($_POST['q'.($nbQ+1)]); $i++)
        {
            $varRep=urldecode($_POST['q'.($nbQ+1)][$i]);     //entre utilisateur

            $indexRecherche=0;
            //on verifie que c'est une bonne reponse
            for($j=0; $j<count($tabLabelReponse[$nbQ]); $j++)
            {
                if ($varRep == $tabLabelReponse[$nbQ][$j])
                    $indexRecherche=$j;
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
        echo("Bonne réponse");
    else 
    {
        //on recherche les bons réponses
        $reponseCorrect = new ArrayObject(array());
        for($i=0; $i<count($tabLabelReponse[$nbQ]);$i++)
        {
            if($tabReponse[$nbQ][$i]=="1")
                $reponseCorrect->append($tabLabelReponse[$nbQ][$i]);  
        }
        //affichage
        echo("Faux les réponses étaient : ");
        for($i=0; $i<count($reponseCorrect); $i++)
        {
            echo($reponseCorrect[$i]);
            if ($i != count($reponseCorrect)-1)
                echo(", ");
        }
    }
}

//nbQ : index de la question (0 :(question 1))
function verifSelect($nbQ, $tabReponse, $tabLabelReponse)
{
    //on recherche la bonne reponse
    $indexRecherche=0;
    for($i=0; $i<count($tabReponse[$nbQ]);$i++)
    {
        if ($tabReponse[$nbQ][$i]=="1")
        {
            $indexRecherche=$i;
        }
    }
    $bonneReponse = $tabLabelReponse[$nbQ][$indexRecherche];

    //on verifie si la bonne reponse de la base de donnee correspond à la reponse submit
    if (isset($_POST['q'.($nbQ+1)]))
    {
        $varRep = urldecode($_POST['q'.($nbQ+1)]);      //entree de l'utilisateur
        if($varRep == $bonneReponse)
        {
            echo("Bonne réponse");
        }
        else
        {
            echo("Faux la réponse était : ".$bonneReponse);
        } 
    }
    else
    {
        echo("Faux la réponse etait : ".$bonneReponse);
    }              
}

//nbQ : index de la question (0 :(question 1))
function verifInput($nbQ, $tabReponse, $tabLabelReponse)
{     
    //on recherche la bonne reponse
    $indexRecherche=0;
    for($i=0; $i<count($tabReponse[$nbQ]);$i++)
    {
        if ($tabReponse[$nbQ][$i]=="1")
        {
            $indexRecherche=$i;
        }
    }
    $bonneReponse = $tabLabelReponse[$nbQ][$indexRecherche];

    //on verifie si la bonne reponse de la base de donnee correspond à la reponse submit
    if (isset($_POST['q'.($nbQ+1)]))
    {
        $varRep = $_POST['q'.($nbQ+1)];      //entree de l'utilisateur
        if($varRep == $bonneReponse)
        {
            echo("Bonne réponse");
        }
        else
        {
            echo("Faux la réponse était : ".$bonneReponse);
        } 
    }
    else
    {
        echo("Faux la réponse etait : ".$bonneReponse);
    } 
}
?>