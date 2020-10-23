<?php include('ouverture.php');
?>


<!DOCTYPE html>
<html>
    <?php $varquiz=1; include('load_quizz.php');?>
    <head>
        <meta charset="iso-8859-1"/>
        <title>Reponses : <?php echo($title);?></title>
        <link href="css/quiz1.css" rel="stylesheet"/>
        <link href="css/body.css" rel="stylesheet"/>
    </head>
    <body>
        <?php include ('header.php'); ?>
        
        <h3>Quiz 1: <?php echo($title);?></h3>
        <br/>
        <?php include ('checkAnswers.php');?>
        <?php include('footer.php');?>
    </body>
</html>
