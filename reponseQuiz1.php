
<!DOCTYPE html>
<html>
    <head>
        <meta charset="iso-8859-1"/>
        <title>Reponses : Star Wars</title>
        <link href="css/quiz1.css" rel="stylesheet"/>
    </head>
    <body>
        <h3>Quiz 1: Star Wars</h3>
        <br/>
        <label id="question">Question 1: Combien de Star Wars à realisé Georges Lucas ?</label>
        <div id="reponse">
            <?php
            if($_GET['q1'] === "rep1")
            {
                echo("Bonne réponse");
            }
            else
            {
                echo("Faux la reponse etait : 6");
            }
            ?>
        </div>
        <label id="question">Question 2: Lesquels de ces personnages ne sont pas des Jedi ?</label>
        <div id="reponse">
            <?php
            if ($_GET['q2a'] !== "rep1" && $_GET['q2b'] === "rep2" && $_GET['q2c'] == "rep3" && $_GET['q2d'] !== "rep4")
            {
                echo("Bonne réponse");
            }
            else
            {
                echo("Faux les reponses etaient : Ahsoka Tano et R2D2");
            }
            ?>
        </div>
        <label id="question">Question 3: Dans La Revanche des Siths, quel adversaire affronte Maitre Yoda ?</label>
        <div id="reponse">
            <?php
            if($_GET['q3'] === "rep3")
            {
                echo("Bonne réponse");
            }
            else
            {
                echo("Faux la reponse etait : Dark Sidious");
            }
            ?>
        </div>
        <label id="question">Question 4: Quel est l'année de sortie du premier Star Wars ?</label>
        <div id="reponse">
            <?php
            if($_GET['q4'] === "1977")
            {
                echo("Bonne réponse");
            }
            else
            {
                echo("Faux la reponse etait : 1977");
            }
            ?>
        </div>
    </body>
</html>
