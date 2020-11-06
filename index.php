<!DOCTYPE html>
<html>
<<<<<<< HEAD:index.php
    <?php
    if(!isset($_GET['page'])){
        if (!isset($_GET['connected']) || $_GET['connected']==false){
            $_GET['page'] = 'homepage';
        }
        else{
            $_GET['page'] = 'createAccount';
        }
    }
    //ouverture bdd
    include('model/ouverture.php');
    ?>

    <body>
        <div id="page-container">
            <?php
            include('vues/header.php');
=======
<head>
  <link href="../css/HomePage.css" rel="stylesheet" type="text/css">
  <link href="../css/body.css" rel="stylesheet"/>
 </head>

<?php
session_start();
$id = $_SESSION[user_id];
if(!isset($_GET['page'])){
    if (!isset($_GET['connected']) || $_GET['connected']==false){
        $_GET['page'] = 'homepage';
    }
    else{
        $_GET['page'] = 'createAccount';
    }
}

include('../vues/ouverture.php');

include('../vues/header.php');
>>>>>>> Pierre:controler/index.php

            //differentes vues
            if ($_GET['page'] == 'homepage'){
                include('vues/homePage.php');
            }
            elseif($_GET['page'] == 'createAccount'){
                include('vues/createAccount.php');
            }
            elseif($_GET['page'] == 'quizz'){
                $varquiz = $_GET['varquiz'];
                include('model/loadQuizz.php');  
                include('vues/quiz.php');  
            }
            elseif($_GET['page'] == 'result')
            {
                $varquiz = $_GET['varquiz'];
                include('model/loadQuizz.php'); 
                include('vues/reponseQuiz.php');
            }
            else{
                die;
            }

<<<<<<< HEAD:index.php
            include('vues/footer.php');
            ?>
        </div>
    </body>
</html>
=======
include('../vues/footer.php');
>>>>>>> Pierre:controler/index.php
