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
        <?php include('header.php');?>
        <?php
            $req = "SELECT quizz_name FROM quizz WHERE quizz_id = 1";
            $res=$database->query($req);
            $title = $res->fetch()[0];

            $req = "SELECT question_title FROM question WHERE question_quizz_id = 1";
            $res=$database->query($req);
            $tabQuestion = array();
            while ($donnee = $res->fetch()){
                array_push($tabQuestion, $donnee[0]);
            }
            
            $req = "SELECT question_id FROM question WHERE question_quizz_id = 1";
            $res=$database->query($req);
            $tabLabelReponse = array();
            while ($donnee = $res->fetch()){
                $rep_list = array();
                $req2 = "SELECT answer_text FROM answer WHERE answer_question_id = $donnee[0]";
                $res2=$database->query($req2);
                while ($donnee2 = $res2->fetch()){
                    array_push($rep_list, $donnee2[0]);
                }
                array_push($tabLabelReponse, $rep_list);
            }

            
            $req = "SELECT question_id FROM question WHERE question_quizz_id = 1";
            $res=$database->query($req);
            $tabReponse = array();
            while ($donnee = $res->fetch()){
                $validity_list = array();
                $req2 = "SELECT is_valid_answer FROM answer WHERE answer_question_id = $donnee[0]";
                $res2=$database->query($req2);
                while ($donnee2 = $res2->fetch()){
                    array_push($validity_list, $donnee2[0]);
                }
                array_push($tabReponse, $validity_list);
            }

            var_dump($tabLabelReponse)
        ?>


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
