<?php include('ouverture.php'); ?>

<!DOCTYPE html>
<html>
    <?php $varquiz=2; include('load_quizz.php');?>
    <head>
        <meta charset="iso-8859-1"/>
        <title>Reponses : <?php echo($title);?></title>
        <link href="css/quiz1.css" rel="stylesheet"/>
        <link href="css/body.css" rel="stylesheet"/>
    </head>
    <body>
        <?php include('header.php');?>
        <h3>Quiz 2: <?php echo($title);?></h3>
        <br/>
        <!--On appelle le mecanisme de verification de reponse-->
        <?php include('checkAnswers.php');?>
        <?php include('footer.php');?>
    </body>
</html>