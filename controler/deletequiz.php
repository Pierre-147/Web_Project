<?php
    include ('controler/utility_quizz.php');
    delete_res($_SESSION["id"],$_GET["varquiz"],$database);
    header("Location:index.php?page=account");
?>