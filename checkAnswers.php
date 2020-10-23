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

            //on verifie si la bonne reponse de la base de donnee correspond à la reponse submit
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
            //questionnaire a choix multiples => on recherche le nombre de bonne réponse
            $totalBonneReponse=0;
            for($i=0;$i<count($tabReponse[1]); $i++)
            {
                if ($tabReponse[1][$i]=="1")
                    $totalBonneReponse++;
            }

            if(isset($_GET['q2'])!=0)
            {
                $test = true;      //on initialise un boolean, on suppose que la reponse est vrai sauf si on ne repond rien

                $bonneReponseInput=0;
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
                    if($tabReponse[1][$indexRecherche] != "1")      //si une mauvaise reponse est detecte => c'est faux
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
                for($i=0; $i<count($tabLabelReponse);$i++)
                {
                    if($tabReponse[1][$i]=="1")
                        $reponseCorrect->append($tabLabelReponse[1][$i]);  
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
            ?>
        </div>
        <label id="question">Question 3: <?php echo($tabQuestion[2]);?></label>
        <div id="reponse">
            <?php
            //on recherche la bonne reponse
            $indexRecherche=0;
            for($i=0; $i<count($tabReponse[2]);$i++)
            {
                if ($tabReponse[2][$i]=="1")
                {
                    $indexRecherche=$i;
                }
            }
            $bonneReponse = $tabLabelReponse[2][$indexRecherche];

            //on verifie si la bonne reponse de la base de donnee correspond à la reponse submit
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
            //on recherche la bonne reponse
            $indexRecherche=0;
            for($i=0; $i<count($tabReponse[3]);$i++)
            {
                if ($tabReponse[3][$i]=="1")
                {
                    $indexRecherche=$i;
                }
            }
            $bonneReponse = $tabLabelReponse[3][$indexRecherche];

            //on verifie si la bonne reponse de la base de donnee correspond à la reponse submit
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