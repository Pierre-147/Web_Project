<head>
    <meta charset="iso-8859-1"/>
    <title>Quiz <?php echo($varquiz." : ".$title);?></title>
    <link href="css/quiz.css" rel="stylesheet"/>
    <link href="css/body.css" rel="stylesheet"/>
</head>

<div id="content-wrap">
    <h3>Quiz <?php echo($varquiz." : ".$title);?></h3>
    <br/>
    <form action=<?php echo("index.php?page=result&varquiz=".$varquiz)?> method="POST">
        <?php include('controler/displayQuiz.php')?>
    </form>
</div>