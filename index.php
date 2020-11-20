<!DOCTYPE html>
<html>
    <?php
    session_start();
    if(!isset($_SESSION["username"])){
        $id= "visiteur";
    }
    else{
        $id= $_SESSION["username"];
    }

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

    $page = $_GET['page'];
    if ($page=="createAccount"){
        if($id!="visiteur"){
            $page="account";
        }
    }
    ?>

    <head>
        
        <meta charset="iso-8859-1"/>
        <link href='css/body.css' rel='stylesheet'>    
        <?php 
        //differentes vues
        
        if ($page== 'homepage')
        {
            ?>
            <title>HomePage</title>
            <link href="css/homePage.css" rel="stylesheet" type="text/css">
            <?php
        }
        elseif($page == 'createAccount')
        {
            ?>
            <title>Account</title>
            <link href='css/createAccount.css' rel='stylesheet'>
            <link href='css/homePage.css' rel='stylesheet'>
            <?php
        }
        elseif($page== 'quizz')
        {
            $varquiz = $_GET['varquiz'];
            include('model/loadQuizz.php');  
            ?>
            <title>Quiz <?php echo($varquiz." : ".$title);?></title>
            <link href="css/quiz.css" rel="stylesheet"/>
            <?php
        }
        elseif($page== 'result')
        {
            $varquiz = $_GET['varquiz'];
            include('model/loadQuizz.php'); 
            ?>
            <title>Reponses : <?php echo($title);?></title>
            <link href="css/quiz.css" rel="stylesheet"/>
            <?php
        }
        elseif($page=='account'){
            ?>
            <link href="css/account.css" rel="stylesheet"/>
            <title> Votre Compte : <?php echo($_SESSION["username"]); ?> </title>
            <?php
        }
        ?>
    </head>

    <body>
        <div id="page-container">
            <?php
            include('vues/header.php');

            //differentes vues
            if ($page== 'homepage')
            {
                include('vues/homePage.php');
            }
            elseif($page == 'createAccount')
            {
                include('vues/createAccount.php');
            }
            elseif($page== 'quizz')
            {
                include('vues/quiz.php');  
            }
            elseif($page== 'result')
            {
                include('vues/reponseQuiz.php');
            }
            elseif($page=='account'){
                include('vues/account.php');
            }
            elseif($page == 'verifConnexion')
            {
                include('controler/verifConnexion.php');
                
            }
            elseif($page=="verifCreation"){
                include('controler/verifCreation.php');
            }
            else{
                die;
            }

            include('vues/footer.php');
            ?>
        </div>
    </body>
</html>