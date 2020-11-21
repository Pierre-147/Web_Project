<div id="content-wrap">
    <?php 
    $user = 1;
    $varQuizz=1;
    $dateTime = (new \DateTime())->format('Y-m-d H:i');
    
    //on efface
    include('controler/utility_quizz.php');
    delete_res($user, $varQuizz, $database);


    //on ecrit les reponses dans la base de donnnée
    include('model/writeAnswer.php');

    include('controler/get_answer.php');

    include('controler/verif.php');
   
    $i=0;
    foreach($tabValidation as $question)
    {   

        ?>
        <label id="question" for=<?php echo("q".($i+1))?>><?php echo("Question ".($i+1)." : ".$tabQuestion[$i]);?></label>
        <div id="reponsePossible">
            <p>
                <?php
                    verif($i, $tabValidation, $tabAnswer, true);
                ?>
            </p>
        </div>
        <?php
        $i++;
    }
    ?>
</div>