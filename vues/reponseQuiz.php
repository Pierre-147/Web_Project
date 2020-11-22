<div id="content-wrap">
    <?php 
    $user = 5;
    $dateTime = (new \DateTime())->format('Y-m-d H:i');
    
    //on efface
    include('controler/utility_quizz.php');
    delete_res($user, $varquiz, $database);

    //on ecrit les reponses dans la base de donnnée
    include('model/writeAnswer.php');

    //on recupere les reponses
    include('controler/get_answer.php');

    //on inclut la verification avec affichage
    include('controler/repQuizWithDisplay.php');
    ?>
</div>