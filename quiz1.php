<?php include('ouverture.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="iso-8859-1"/>
        <title>Quiz 1 : Star Wars</title>
        <link href="css/quiz1.css" rel="stylesheet"/>
        <link href="css/body.css" rel="stylesheet"/>
    </head>
    <body>
        <?php include('header.php');?>
        <div id="page-container">
            <?php
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
                );
            ?>
            <h3>Quiz 1: <?php echo($title);?></h3>
            <br/>
            <form action="reponseQuiz1.php" method="GET">
                <label id="question" for="q1">Question 1 : <?php echo($tabQuestion[0]);?></label> 
                <p>
                    <div id="reponsePossible">
                        <label><?php echo($tabLabelReponse[0][0]);?></label>
                        <input type="radio" id="q1" name="q1" value="rep1">
                        <label><?php echo($tabLabelReponse[0][1]);?></label>
                        <input type="radio" id="q1" name="q1" value="rep2">
                        <label><?php echo($tabLabelReponse[0][2]);?></label>
                        <input type="radio" id="q1" name="q1" value="rep3">
                    </div>
                </p>
                <label id="question" for="q2">Question 2 : <?php echo($tabQuestion[1]);?></label> 
                <p>
                    <div id="reponsePossible">
                        <label for="q2"><?php echo($tabLabelReponse[1][0]);?></label>
                        <input type="checkbox" name="q2a">
                        <label for="q2"><?php echo($tabLabelReponse[1][1]);?></label>
                        <input type="checkbox" name="q2b">
                        <label for="q2"><?php echo($tabLabelReponse[1][2]);?></label>
                        <input type="checkbox" name="q2c">
                        <label for="q2"><?php echo($tabLabelReponse[1][3]);?></label>
                        <input type="checkbox" name="q2d">
                    </div>
                </p>
                <label id="question" for="q3">Question 3 : <?php echo($tabQuestion[2]);?></label> 
                <p>
                    <div id="reponsePossible">
                        <select name="q3">
                            <option value="">--Please choose an option--</option>
                            <option value="rep1"><?php echo($tabLabelReponse[2][0]);?></option>
                            <option value="rep2"><?php echo($tabLabelReponse[2][1]);?></option>
                            <option value="rep3"><?php echo($tabLabelReponse[2][2]);?></option>
                        </select>
                    </div>
                </p>
                <label id="question" for="q4">Question 4 : <?php echo($tabQuestion[3]);?></label> 
                <p>
                    <div id="reponsePossible">
                       <input type="number" id="q4" name="q4" placeholder="2000" min="1800" max="2020"> 
                    </div>
                </p>
                <p>
                    <div id="reponsePossible">
                        <input type="submit" value="Repondre">
                    </div>
                </p>
            </form>
        </div>
        <?php include('footer.php');?>
    </body>
</html>
