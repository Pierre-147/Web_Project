<!DOCTYPE html>
<html>
    <?php
    session_start();       //on démarre la session
    //ouverture bdd
    include('model/ouverture.php');
    include("model/getNameByID.php");
    //affichage utilisateur
    if(!isset($_SESSION["id"])){
        $name= "visiteur";
    }
    else{
        $name= getName($_SESSION["id"], $database) ;
    }

    //si on est connecté, on redirige vers notre page de compte
    $page = $_GET['page'];
    if ($page=="createAccount"){
        if($name!="visiteur"){
            $page="account";
        }
    }

    //redirection des quizz si on n'est pas connecté
    if ($page!="homepage" && $page!="account" && $page!="deconnexion" && $page!="verifConnexion" && $page!="verifCreation"){
        if($name=="visiteur"){
            $page="createAccount";
        }
    }

    //reset des messages d'erreur de connexion
    if($page != "createAccount")
    {
        $_SESSION["creation"]=NULL;
    }
    ?>

    <!--Differents head selon les pages, on change le title ainsi que les differents css-->
    <head>
        <meta charset="iso-8859-1"/>
        <link href='css/body.css' rel='stylesheet'>    
        <?php 
        //différentes vues
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
            <link href="css/quiz.css" rel="stylesheet"/>
            <title> Votre Compte : <?php echo(getName($_SESSION["id"], $database)); ?> </title>
            <?php
        }
        elseif($page == "classement")
        {
            ?>
            <link href="css/classement.css" rel="stylesheet"/>
            <title>Classement </title>
            <?php
        }
        ?>
    </head>

    <!--Differentes vues-->
    <body>
        <div id="page-container">
            <?php
            include('vues/header.php');
            //différentes vues
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
            elseif($page=='deconnexion'){
                include('controler/deconnexion.php');
            }
            elseif($page=='suppression'){
                include('controler/deleteQuiz.php');
            }
            elseif($page == 'verifConnexion')
            {
                include('model/verifConnexion.php');
                
            }
            elseif($page=="verifCreation"){
                include('model/verifCreation.php');
            }
            elseif($page == "classement")
            {
                include('vues/classementGeneral.php');
            }
            else{
                die;
            }

            include('vues/footer.php');
            ?>
        </div>
    </body>
</html>