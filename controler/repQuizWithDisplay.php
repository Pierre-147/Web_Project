<?php    
    //on rajoute les fonctions de verification
    include('controler/fonctionVerif.php');
?>
<!--Reponse avec affichage-->
<div id="zoneResultQuiz">
    <h3 id="titleQuiz">Quiz <?php echo($varquiz." : ".$title);?></h3>
    <br/>
    <?php
    $i=0;
    $score = 0;
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