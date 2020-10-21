<?php include('ouverture.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="iso-8859-1"/>
        <title>Reponses : Quentin Tarantino</title>
        <link href="css/quiz1.css" rel="stylesheet"/>
        <link href="css/body.css" rel="stylesheet"/>
    </head>
    <body>
        <?php include('header.php');?>
        <h3>Quiz 2: Quentin Tarantino</h3>
        <br/>
        <label id="question">Question 1 : Dans le film "Pulp fiction", où meurt le personnage incarné par John Travolta ?</label>
        <div id="reponse">
            <?php
            if (isset($_GET['q1']))
            {
                if($_GET['q1'] === "rep3q1")
                {
                    echo("Bonne réponse");
                }
                else
                {
                    echo("Faux la réponse était : Aux toilettes");
                } 
            }
            else
            {
                echo("Faux la réponse était : Aux toilettes");
            }         
            ?>
        </div>
        <label id="question">Question 2 : Parmi ces personnages, quels sont ceux qui meurent dans le film "Django unchained" ?</label>
        <div id="reponse">
            <?php
            if (!(isset($_GET['q2a'])) && isset($_GET['q2b']) && isset($_GET['q2c']) && !(isset($_GET['q2d'])))
            {
                echo("Bonne réponse");
            }
            else
            {
                echo("Faux les réponses étaient : Dr King Schultz et Calvin Candie");
            }
            ?>
        </div>
        <label id="question">Question 3 : Quel est le 1er film réalisé par Quentin Tarantino ?</label>
        <div id="reponse">
            <?php
            if($_GET['q3'] === "rep4q3")
            {
                echo("Bonne réponse");
            }
            else
            {
                echo("Faux la réponse était : Reservoir Dogs");
            }
            ?>
        </div>
        <label id="question">Question 4 : Combien de films Quentin Tarantino a-t-il rélisé ?</label>
        <div id="reponse">
            <?php
            if($_GET['q4'] === "9")
            {
                echo("Bonne réponse");
            }
            else
            {
                echo("Faux la réponse était : 9");
            }
            ?>
        </div>
        <?php include('footer.php');?>
    </body>
</html>