
<!DOCTYPE html>
<html>
    <head>
        <meta charset="iso-8859-1"/>
        <title>Reponses : Star Wars</title>
        <link href="css/quiz1.css" rel="stylesheet"/>
        <link href="css/body.css" rel="stylesheet"/>
    </head>
    <body>
        <?php include('header.php');?>

        <?php
        //var_dump($_GET);
            $title = "Star Wars";
            $tabQuestion = array(
                "Combien de Star Wars à realisé Georges Lucas ?",
                "Lesquels de ces personnages ne sont pas des Jedi ?",
                "Dans La Revanche des Siths, quel adversaire affronte Maitre Yoda ?",
                "Quel est l'année de sortie du premier Star Wars ?",
            );
            $tabLabelReponse = array(
                array(6, 9, 11),
                array("Yoda", "Jar Jar Binks", "R2D2", "Ahsoka Tano"),
                array("Dark Plageis", "Dark Maul", "Dark Sidious"),
                array("1977")
            );
            $tabReponse = array(
                array("1", "0", "0"),
                array("0", "1", "1", "0"),
                array("0", "0", "1"),
                array("1"),
            );
        ?>
        <h3>Quiz 1: <?php echo($title);?></h3>
        <br/>
        <label id="question">Question 1: <?php echo($tabQuestion[0]);?></label>
        <div id="reponse">
            <?php
            //on recherche la bonne reponse
            $indexRecherche=0;
            for($i=0; $i<count($tabReponse[0]);$i++)
            {
                if ($tabReponse[0][$i]=="1")
                {
                    $indexRecherche=$i;
                }
            }
            $bonneReponse = $tabLabelReponse[0][$indexRecherche];

            if (isset($_GET['q1']))
            {
                $varRep = urldecode($_GET['q1']);      //entree de l'utilisateur
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
            ?>
        </div>
        <label id="question">Question 2: <?php echo($tabQuestion[1]);?></label>
        <div id="reponse">
            <?php
            //on initialise un boolean, on suppose que la reponse est vrai sauf si on ne repond rien
            if(Count($_GET['q2'])!=0)
                $test = true;
            else
                $test= false;

            //on parcourt les reponses envoyées
            for ($i = 0; $i< count($_GET['q2']); $i++)
            {
                $varRep=urldecode($_GET['q2'][$i]);     //entre utilisateur

                $indexRecherche=0;
                //on verifie que c'est une bonne reponse
                for($j=0; $j<count($tabLabelReponse); $j++)
                {
                    if ($varRep == $tabLabelReponse[1][$j])
                        $indexRecherche=$j;
                }

                if($tabReponse[1][$indexRecherche] != "1")
                    $test = false; 
            }

            if ($test == true)
                echo("Bonne réponse");
            else 
            {
                $reponseCorrect = new ArrayObject(array());
                for($i=0; $i<count($tabLabelReponse);$i++)
                {
                    if($tabReponse[1][$i]=="1")
                        $reponseCorrect->append($tabLabelReponse[1][$i]);  
                }
                echo("Faux les réponses étaient : ");
                for($i=0; $i<count($reponseCorrect); $i++)
                {
                    echo($reponseCorrect[$i]);
                    if ($i != count($reponseCorrect)-1)
                        echo(", ");
                }
            }
            ?>
        </div>
        <label id="question">Question 3: <?php echo($tabQuestion[2]);?></label>
        <div id="reponse">
            <?php
            $indexRecherche=0;
            for($i=0; $i<count($tabReponse[2]);$i++)
            {
                if ($tabReponse[2][$i]=="1")
                {
                    $indexRecherche=$i;
                }
            }
            $bonneReponse = $tabLabelReponse[2][$indexRecherche];

            if (isset($_GET['q3']))
            {
                $varRep = urldecode($_GET['q3']);      //entree de l'utilisateur
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
            ?>
        </div>
        <label id="question">Question 4: <?php echo($tabQuestion[3]);?></label>
        <div id="reponse">
            <?php
            $indexRecherche=0;
            for($i=0; $i<count($tabReponse[3]);$i++)
            {
                if ($tabReponse[3][$i]=="1")
                {
                    $indexRecherche=$i;
                }
            }
            $bonneReponse = $tabLabelReponse[3][$indexRecherche];

            if (isset($_GET['q4']))
            {
                $varRep = $_GET['q4'];      //entree de l'utilisateur
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
            ?>
        </div>
        <?php include('footer.php');?>
    </body>
</html>
