<?php    
    //on rajoute les fonctions de verification
    include('controler/fonctionVerifQuiz.php');
?>
<!--Reponse avec affichage-->
<div id="zoneResultQuiz">
    <h3 id="titleQuiz">Quiz <?php echo($varquiz." : ".$title);?></h3>
    <br/>
    <?php
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
                        $score = verifRadio($i, $tabReponse, $tabLabelReponse, $_POST['q'.($i+1)], true);
                        break;
                    case "checkbox":
                        $score = verifCheck($i, $tabReponse, $tabLabelReponse, $_POST['q'.($i+1)], true);
                        break;
                    case "select":
                        $score = verifSelect($i, $tabReponse, $tabLabelReponse, $_POST['q'.($i+1)], true);
                        break;
                    case "input":
                        $score = verifInput($i, $tabReponse, $tabLabelReponse, $_POST['q'.($i+1)], true);
                        break;
                }
                ?>
            </p>
        </div>
        <?php
        $i++;
    }
    ?>
    <label id="score">Score : <?php echo($score);?>/<?php echo($i);?></label>
</div>