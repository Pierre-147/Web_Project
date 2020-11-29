<!--Réponse avec affichage-->
<div id="zoneResultQuiz">
    <h3 id="titleQuiz">Quiz <?php echo($varquiz." : ".$title);?></h3>
    <br/>
    <?php
    $i=0;
    $score = 0;
    //on affiche le recap des questions et les reponses avec correction
    foreach($tabValidation as $question)
    {   
        ?>
        <label id="question" for=<?php echo("q".($i+1))?>><?php echo("Question ".($i+1)." : ".$tabQuestion[$i]);?></label>
        <div id="reponsePossible">
            <p>
                <?php
                    $score+=verifQuiz($i, $tabValidation, $tabAnswer, true);
                ?>
            </p>
        </div>
        <?php
        $i++;
    }
    ?>
    <label id="score">Score : <?php echo($score);?>/<?php echo($i);?></label>
</div>