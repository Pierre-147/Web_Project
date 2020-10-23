<?php include('ouverture.php');
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="iso-8859-1"/>
        <title>Reponses : Star Wars</title>
        <link href="css/quiz1.css" rel="stylesheet"/>
        <link href="css/body.css" rel="stylesheet"/>
    </head>
    <body>
        <?php include('load_quizz.php');?>
        <h3>Quiz 1: <?php echo($title);?></h3>
        <br/>
        <label id="question">Question 1: <?php echo($tabQuestion[0]);?></label>
        <div id="reponse">
            <?php
            if (isset($_GET['q1']))
            {
                if($_GET['q1'] === $tabReponse[0])
                {
                    echo("Bonne réponse");
                }
                else
                {
                    echo("Faux la réponse était : ".$tabLabelReponse[0][0]);
                } 
            }
            else
            {
                echo("Faux la réponse etait : ".$tabLabelReponse[0][0]);
            }         
            ?>
        </div>
        <label id="question">Question 2: <?php echo($tabQuestion[1]);?></label>
        <div id="reponse">
            <?php
            if (!(isset($_GET['q2a'])) && isset($_GET['q2b']) && isset($_GET['q2c']) && !(isset($_GET['q2d'])))
            {
                echo("Bonne réponse");
            }
            else
            {
                echo("Faux les réponses étaient : ".$tabLabelReponse[1][1]." et ".$tabLabelReponse[1][2]);
            }
            ?>
        </div>
        <label id="question">Question 3: <?php echo($tabQuestion[2]);?></label>
        <div id="reponse">
            <?php
            if($_GET['q3'] === $tabReponse[2])
            {
                echo("Bonne réponse");
            }
            else
            {
                echo("Faux la réponse était : ".$tabLabelReponse[2][2]);
            }
            ?>
        </div>
        <label id="question">Question 4: <?php echo($tabQuestion[3]);?></label>
        <div id="reponse">
            <?php
            if($_GET['q4'] === $tabReponse[3])
            {
                echo("Bonne réponse");
            }
            else
            {
                echo("Faux la réponse était : ".$tabReponse[3]);
            }
            ?>
        </div>
        <?php include('footer.php');?>
    </body>
</html>
