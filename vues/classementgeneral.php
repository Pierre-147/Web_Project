<div id="content-wrap">
    <label>Choisissez le quiz dont vous souhaitez voir le classement :</label>
    <br/>
    <a href = "index.php?page=classement&varquiz=1">Quiz 1</a>
    <a href = "index.php?page=classement&varquiz=2">Quiz 2</a>
    <br/>
    <br/>
    <?php 
    if (isset($_GET["varquiz"])){
        include('model/rankingUser.php');
        $varquiz=$_GET["varquiz"];
        include('controler/utility_quizz.php');
        //on rajoute les fonctions de verification
        include('controler/fonctionVerif.php');
        include('model/loadQuizz.php');
        ?>
        <div id="tab">
        <table>
        <caption>Classement général</caption>

        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Score</th>
            <th>Date</th>
        </tr>
        <?php
        foreach($tabprenom as $names){
            $user=$names[2];
            include('controler/get_answer.php');
            include('controler/repQuizWithoutDisplay.php');
            if ($date!=null){
                ?>
                <tr>
                    <td><?php echo($names[1]);?></td>
                    <td><?php echo($names[0]);?></td>
                    <td><?php echo($score);?>/<?php echo($total);?></td>
                    <td><?php echo($date);?></td>
                </tr>
                <?php
            }
        }
        ?>
        </table>
        </div>
        <?php 
    }
    ?>
</div>