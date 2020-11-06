<div id="content-wrap">
    <h3>Quiz <?php echo($varquiz." : ".$title);?></h3>
    <br/>
    <form action=<?php echo("index.php?page=result&varquiz=".$varquiz)?> method="POST">
        <?php include('controler/displayQuiz.php')?>
    </form>
</div>