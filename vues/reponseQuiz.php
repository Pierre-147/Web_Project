<div id="content-wrap">
    <?php 
    //on ecrit les reponses dans la base de donnnée
    $user = 1;
    $dateTime = (new \DateTime())->format('Y-m-d H:i');
    include('model/writeAnswer.php');

    //verification avec affichage
    include('controler/repQuizWithDisplay.php')
    ?>
</div>