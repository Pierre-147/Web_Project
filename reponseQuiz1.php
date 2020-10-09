
<!DOCTYPE html>
<html>
    <head>
        <meta charset="iso-8859-1"/>
        <title>Reponses : Star Wars</title>
        <link href="css/quiz1.css" rel="stylesheet"/>
        <link href="css/body.css" rel="stylesheet"/>
    </head>
    <body>
        <?php include('header.php');?>
        <h3>Quiz 1: Star Wars</h3>
        <br/>
        <label id="question">Question 1: Combien de Star Wars à realisé Georges Lucas ?</label>
        <div id="reponse">
            <?php
            if (isset($_GET['q1']))
            {
                if($_GET['q1'] === "rep1")
                {
                    echo("Bonne réponse");
                }
                else
                {
                    echo("Faux la reponse était : 6");
                } 
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
            if (!(isset($_GET['q2a'])) && isset($_GET['q2b']) && isset($_GET['q2c']) && !(isset($_GET['q2d'])))
            {
                echo("Bonne réponse");
            }
            else
            {
                echo("Faux les réponses étaient : Jar Jar et R2D2");
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
                echo("Faux la reponse était : Dark Sidious");
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
                echo("Faux la reponse était : 1977");
            }
            ?>
        </div>
        <?php include('footer.php');?>
    </body>
</html>
