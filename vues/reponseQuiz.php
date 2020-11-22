<div id="content-wrap">
    <?php 
    $user = $_SESSION["id"];
    $dateTime = (new \DateTime())->format('Y-m-d H:i');
    
    //on efface
    include('controler/utility_quizz.php');
    include('controler/fonctionVerif.php');
    delete_res($user, $varquiz, $database);

    //on ecrit les reponses dans la base de donnnée
    include('model/writeAnswer.php');

    //on recupere les reponses
    include('controler/get_answer.php');

    //on inclut la verification avec affichage
    include('controler/repQuizWithDisplay.php');
    ?>
</div>