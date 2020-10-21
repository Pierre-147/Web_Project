<?php include('ouverture.php'); ?>

<!DOCTYPE html>
<html>
    <head>
        <link href='css/body.css' rel='stylesheet'>
        <link href="css/quiz1.css" rel="stylesheet"/>
        <title>Quiz 2 : Quentin Tarantino</title>
    </head>
    <body> 
    <?php include("header.php");?>
        <form action="reponseQuiz2.php" method="GET">
            <h3>Quiz 2 : Quentin Tarantino</h3>
            <label id="question" for="q1">Question 1 : Dans le film "Pulp fiction", où meurt le personnage incarné par John Travolta ?</label>
            <p>
                <div id="reponsePossible">
                    <label for>Dans une cuisine</label>
                    <input type="radio" name="q1" value="rep1q1">
                    <label for>Dans une voiture</label>
                    <input type="radio" name="q1" value="rep2q1">
                    <label for>Aux toilettes</label>
                    <input type="radio" name="q1" value="rep3q1">
                    <label for>Dans un bar</label>
                    <input type="radio" name="q1" value="rep4q1">
                </div>
            </p>
            <label id="question" for="q2">Question 2 : Parmi ces personnages, quels sont ceux qui meurent dans le film "Django unchained" ?</label>
            <p>
                <div id="reponsePossible">
                    <label for>Django</label>
                    <input type="checkbox" name="q2a">
                    <label>Dr King Schultz</label>
                    <input type="checkbox" name="q2b">
                    <label>Calvin Candie</label>
                    <input type="checkbox" name="q2c">
                    <label>Broomhilda von Shaft</label>
                    <input type="checkbox" name="q2d">
                </div>
            </p>
            <label id="question" for="q3">Question 3 : Quel est le 1er film réalisé par Quentin Tarantino ?</label>
            <p>
                <div id="reponsePossible">
                    <select name="q3">
                    <option value="">--Choisissez une option--</option>
                    <option value="rep1q3">Pulp fiction</option>
                    <option value="rep2q3">Django unchained</option>
                    <option value="rep3q3">Jacky Brown</option>
                    <option value="rep4q3">Reservoir dogs</option>
                    <option value="rep5q3">Boulevard de la mort</option>
                    <option value="rep6q3">Kill Bill Volume 1</option>
                    <option value="rep7q3">Inglorious basterds</option>
                    <option value="rep8q3">Les 8 salopards</option>
                    </select>
                </div>
            </p>
            <label id="question" for="q4">Question 4 : Combien de films Quentin Tarantino a-t-il rélisé ?</label>            
            <p>
                <div id="reponsePossible">
                <label for="q4">Choisissez un nombre :</label>
                <input type="number" name="q4" placeholder="0" min="0" max="100">
                </div>
            </p>
            <p>
            <div id="reponsePossible">
                <input type="submit" value="Repondre">
            </div>
            </p>
        </form>
        <?php include("footer.php");?>
    </body>
</html>