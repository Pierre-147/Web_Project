<?php include('ouverture.php'); ?>

<!DOCTYPE html>
<html>
    <?php $varquiz=2; include('load_quizz.php');?>
    <head>
        <meta charset="iso-8859-1"/>
        <title>Quiz 2 : <?php echo($title);?></title>
        <link href="css/quiz1.css" rel="stylesheet"/>
        <link href="css/body.css" rel="stylesheet"/>
    </head>
    <body> 
    <?php include("header.php");?>
        <form action="reponseQuiz2.php" method="GET">
            <h3>Quiz 2 : <?php echo($title);?></h3>
            <label id="question" for="q1">Question 1 : <?php echo($tabQuestion[0]);?></label> 
                <p>
                    <div id="reponsePossible">
                        <label><?php echo($tabLabelReponse[0][0]);?></label>
                        <input type="radio" id="q1" name="q1" value=<?php echo(urlencode($tabLabelReponse[0][0]));?>>
                        <label><?php echo($tabLabelReponse[0][1]);?></label>
                        <input type="radio" id="q1" name="q1" value=<?php echo(urlencode($tabLabelReponse[0][1]));?>>
                        <label><?php echo($tabLabelReponse[0][2]);?></label>
                        <input type="radio" id="q1" name="q1" value=<?php echo(urlencode($tabLabelReponse[0][2]));?>>
                        <label><?php echo($tabLabelReponse[0][3]);?></label>
                        <input type="radio" id="q1" name="q1" value=<?php echo(urlencode($tabLabelReponse[0][3]));?>>
                    </div>
                </p>
                <label id="question" for="q2">Question 2 : <?php echo($tabQuestion[1]);?></label> 
                <p>
                    <div id="reponsePossible">
                        <label for="q2"><?php echo($tabLabelReponse[1][0]);?></label>
                        <input type="checkbox" name="q2[]" value=<?php echo(urlencode($tabLabelReponse[1][0]));?>>
                        <label for="q2"><?php echo($tabLabelReponse[1][1]);?></label>
                        <input type="checkbox" name="q2[]" value=<?php echo(urlencode($tabLabelReponse[1][1]));?>>
                        <label for="q2"><?php echo($tabLabelReponse[1][2]);?></label>
                        <input type="checkbox" name="q2[]" value=<?php echo(urlencode($tabLabelReponse[1][2]));?>>
                        <label for="q2"><?php echo($tabLabelReponse[1][3]);?></label>
                        <input type="checkbox" name="q2[]" value=<?php echo(urlencode($tabLabelReponse[1][3]));?>>
                    </div>
                </p>
                <label id="question" for="q3">Question 3 : <?php echo($tabQuestion[2]);?></label> 
                <p>
                    <div id="reponsePossible">
                        <select name="q3">
                            <option value="">--Please choose an option--</option>
                            <option value=<?php echo(urlencode($tabLabelReponse[2][0]));?>><?php echo($tabLabelReponse[2][0]);?></option>
                            <option value=<?php echo(urlencode($tabLabelReponse[2][1]));?>><?php echo($tabLabelReponse[2][1]);?></option>
                            <option value=<?php echo(urlencode($tabLabelReponse[2][2]));?>><?php echo($tabLabelReponse[2][2]);?></option>
                            <option value=<?php echo(urlencode($tabLabelReponse[2][3]));?>><?php echo($tabLabelReponse[2][3]);?></option>
                            <option value=<?php echo(urlencode($tabLabelReponse[2][4]));?>><?php echo($tabLabelReponse[2][4]);?></option>
                            <option value=<?php echo(urlencode($tabLabelReponse[2][5]));?>><?php echo($tabLabelReponse[2][5]);?></option>
                            <option value=<?php echo(urlencode($tabLabelReponse[2][6]));?>><?php echo($tabLabelReponse[2][6]);?></option>
                            <option value=<?php echo(urlencode($tabLabelReponse[2][7]));?>><?php echo($tabLabelReponse[2][7]);?></option>
                        </select>
                    </div>
                </p>
                <label id="question" for="q4">Question 4 : <?php echo($tabQuestion[3]);?></label> 
                <p>
                    <div id="reponsePossible">
                       <input type="number" id="q4" name="q4" placeholder="2000" min="0" max="3000"> 
                    </div>
                </p>
                <div id="reponsePossible">
                    <input type="submit" value="Repondre">
                </div>
            </p>
        </form>
        <?php include("footer.php");?>
    </body>
</html>