<html>
<head>
  <link href="css/HomePage.css" rel="stylesheet" type="text/css">
  <link href="css/body.css" rel="stylesheet"/>
 </head>

<?php
if(!isset($_GET['page'])){
    if (!isset($_GET['connected']) || $_GET['connected']==false){
        $_GET['page'] = 'homepage';
    }
    else{
        $_GET['page'] = 'createAccount';
    }
}

include('ouverture.php');

include('header.php');

if ($_GET['page'] == 'homepage'){
    include('homepage.php');
}
elseif($_GET['page'] == 'createAccount'){
    include('CreateAccount.php');
}
elseif($_GET['page'] == 'quizz'){
    include('quizz.php');
    include('load_quizz.php');    
}
else{
    die;
}

include('footer.php');