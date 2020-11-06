<html>
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

if ($_GET['page'] == 'homepage'){
    include('../vues/homepage.php');
}
elseif($_GET['page'] == 'createAccount'){
    include('../vues/CreateAccount.php');
}
elseif($_GET['page'] == 'quizz'){
    include('../vues/quizz.php');
    include('../model/load_quizz.php');    
}
else{
    die;
}

include('../vues/footer.php');