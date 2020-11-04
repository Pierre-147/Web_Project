<?php include('ouverture.php'); ?>

<!DOCTYPE html>
<html>
    <!--On charge la base de donnee-->
    <?php $varquiz=2; include('load_quizz.php');?>
    <head>
        <meta charset="iso-8859-1"/>
        <title>Quiz 2 : <?php echo($title);?></title>
        <link href="css/quiz1.css" rel="stylesheet"/>
        <link href="css/body.css" rel="stylesheet"/>
    </head>
    <body> 
    <?php include("header.php");?>
    <div id="page-container">
        <h3>Quiz 2: <?php echo($title);?></h3>
        <br/>
        <form action="reponseQuiz2.php" method="GET">
            <?php include('displayQuiz.php');?>
        </form>
    </div>
    <?php include("footer.php");?>
    </body>
</html>