<div id="content-wrap">
    <?php 
    //on ecrit les reponses dans la base de donnnée
    $user = 1;
    $dateTime = (new \DateTime())->format('Y-m-d H:i');
    include('model/writeAnswer.php');

    //verification avec affichage
    include('controler/repQuizWithDisplay.php');


    $tabGoodAnswer = array(
        array(
            array("1", "6")
        ),
        array(
            array("5", "Jar Jar"),
            array("6", "R2"),
        ),
        array(
            array("10", "Dark Sidious")
        ),
        array(
            array("11", "1977")
        ),
        array(
            array("31", "1")
        )
    )

    ?>
</div>