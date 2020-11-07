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
    ?>

    <body>
        <div id="page-container">
            <?php
            include('vues/header.php');

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
            elseif($_GET['page'] == 'trait')
            {
                include('controler/trait.php');
                
            }
            else{
                die;
            }

            include('vues/footer.php');
            ?>
        </div>
    </body>
</html>