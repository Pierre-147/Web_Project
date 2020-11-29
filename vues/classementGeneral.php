<div id="content-wrap">
    <label>Choisissez le quiz dont vous souhaitez voir le classement :</label>
    <br/>
    <a href = "index.php?page=classement&varquiz=1">Quiz 1</a>
    <a href = "index.php?page=classement&varquiz=2">Quiz 2</a>
    <br/>
    <br/>
    <?php 
    if (isset($_GET["varquiz"]))
    {
        $varquiz=$_GET["varquiz"];
        //on récupère les utilisateurs, leur score et date
        include('model/rankingUser.php');
        //fonction
        include('model/utilityQuizz.php');
        //on rajoute la fonction de vérification
        include('controler/fonctionVerif.php');
        include('model/loadQuizz.php');
        ?>
        <div id="tab">
        <!--On crée le tableau des résultats-->
        <table>
        <caption>Classement général</caption>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Score</th>
            <th>Date</th>
        </tr>
        <?php
        //on récupere les réponses des users et on calcule leurs resultats
        $tabUser=array();
        foreach($tabprenom as $names)
        {
            $user = $names[2];
            include('model/getAnswer.php');
            include('controler/repQuizWithoutDisplay.php');
            if($date!=null)
                array_push($tabUser, array($names[1], $names[0], $date, $score, $total));
        }
        //tri à bulles
        for($i=count($tabUser)-1; $i>0; $i--)
        {
            for($j=0; $j<=$i-1; $j++)
            {
                if ($tabUser[$j][3] < $tabUser[$j+1][3])
                {
                    $temp = $tabUser[$j];
                    $tabUser[$j]=$tabUser[$j+1];
                    $tabUser[$j+1]=$temp;
                }
                else if($tabUser[$j][3] == $tabUser[$j+1][3])
                {
                    $date1= new DateTime($tabUser[$j][2]);
                    $date2= new DateTime($tabUser[$j+1][2]);
                    if ($date1 < $date2)
                    {
                        $temp = $tabUser[$j];
                        $tabUser[$j]=$tabUser[$j+1];
                        $tabUser[$j+1]=$temp;
                    }
                }
            }
        }
        //affichage
        foreach($tabUser as $elem)
        {
            ?>
            <tr>
                <td><?php echo($elem[0]);?></td>
                <td><?php echo($elem[1]);?></td>
                <td><?php echo($elem[3]);?>/<?php echo($elem[4]);?></td>
                <td><?php echo($elem[2]);?></td>
            </tr>
            <?php
        }
        ?>
        </table>
        </div>
        <?php 
    }
    ?>
</div>