<div id="content-wrap">
    <?php 
    $user = $_SESSION["id"];
    $dateTime = (new \DateTime())->format('Y-m-d H:i');
    
    //fonctions necessaires
    include('model/utilityQuizz.php');
    include('controler/fonctionVerif.php');

    //on efface le dernier quizz
    delete_res($user, $varquiz, $database);

    //on ecrit les reponses dans la base de donnnée
    include('model/writeAnswer.php');

    //on recupere les reponses
    include('model/getAnswer.php');

    //on inclut la verification avec affichage
    include('controler/repQuizWithDisplay.php');
    ?>
</div>