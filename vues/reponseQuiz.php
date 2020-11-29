<div id="content-wrap">
    <?php 
    $user = $_SESSION["id"];
    $dateTime = (new \DateTime())->format('Y-m-d H:i');
    
    //fonctions nécessaires
    include('model/utilityQuizz.php');
    include('controler/fonctionVerif.php');

    //on efface le dernier quizz
    delete_res($user, $varquiz, $database);

    //on écrit les réponses dans la base de donnnées
    include('model/writeAnswer.php');

    //on récupère les réponses
    include('model/getAnswer.php');

    //on inclut la vérification avec affichage
    include('controler/repQuizWithDisplay.php');
    ?>
</div>