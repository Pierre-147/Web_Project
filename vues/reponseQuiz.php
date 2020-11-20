<div id="content-wrap">
    <h3>Quiz <?php echo($varquiz." : ".$title);?></h3>
    <br/>
    <?php 
    //on rajoute les fonctions de verification
    include('controler/verifQuiz.php');
    include('controler/writeAnswer.php');
    
    $user = 1;
    $dateTime = (new \DateTime())->format('Y-m-d H:i');

    //ecriture dans la base de donnée
    $i=0;
    foreach($_POST as $elem)
    {
        $tabKey = array_keys($_POST);
        foreach($elem as $el)
        {
            $var = $el;
            if (strpos($el, "ID")===0)  //pas un input text
            {
                $id = substr($el, 2, strlen($el));
                writeID($database, $user, $id, $dateTime);
            }
            else        //input text
            {
                $value = $el;
                $id = $tabKey[$i];
                writeValue($database, $user, $id, $value, $dateTime);
            }
        }
        $i++;
    }


    $score = 0;
    $i=0;
    foreach($tabQuestion as $question)
    {
        ?>
        <label id="question" for=<?php echo("q".($i+1))?>><?php echo("Question ".($i+1)." : ".$question);?></label>
        <div id="reponsePossible">
            <p>
                <?php
                switch($tabTypeQuestion[$i])
                {
                    case "radio":
                        $res = verifRadio($i, $tabReponse, $tabLabelReponse, $_POST['q'.($i+1)]);
                        if ($res==1)
                        {
                            $score+=$res;
                            //writeGoodAnswer($database, 1, $tabQuestionID[$i], $dateTime);
                        }
                        break;
                    case "checkbox":
                        $res = verifCheck($i, $tabReponse, $tabLabelReponse, $_POST['q'.($i+1)]);
                        if ($res==1)
                        {
                            $score+=$res;
                            //writeGoodAnswer($database, 1, $tabQuestionID[$i], $dateTime);
                        }
                        break;
                    case "select":
                        $res = verifSelect($i, $tabReponse, $tabLabelReponse, $_POST['q'.($i+1)]);
                        if ($res==1)
                        {
                            $score+=$res;
                            //writeGoodAnswer($database, 1, $tabQuestionID[$i], $dateTime);
                        }
                        break;
                    case "input":
                        $res = verifInput($i, $tabReponse, $tabLabelReponse, $_POST['q'.($i+1)]);
                        if ($res==1)
                        {
                            $score+=$res;
                            //writeGoodAnswer($database, 1, $tabQuestionID[$i], $dateTime);
                        }
                        break;
                }
                ?>
            </p>
        </div>
        <?php
        $i++;
    }
    echo("Score :".$score."/".$i);
    ?>
</div>