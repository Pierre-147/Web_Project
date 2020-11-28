<?php
    include ('model/utilityQuizz.php');
    delete_res($_SESSION["id"],$_GET["varquiz"],$database);
    header("Location:index.php?page=account");
?>