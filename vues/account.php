<div id="content-wrap">
    <h3> Votre Compte :</h3>
    <p> Bienvenue <?php echo(getName($_SESSION["id"], $database));?></p>
    <div>
        <?php
            $user = $_SESSION["id"];
            $dateTime = (new \DateTime())->format('Y-m-d H:i');
            $varquiz=1;
            include("controler/utility_quizz.php");
            include("controler/fonctionVerif.php");
            include("model/loadQuizz.php");
            //on recupere les reponses
            include('controler/get_answer.php');
            if ($date!=null)
                //on inclut la verification avec affichage
                include('controler/repQuizWithDisplay.php'); 
            $varquiz=2;
            include("model/loadQuizz.php");
            //on recupere les reponses
            include('controler/get_answer.php');
            if ($date!=null)
                //on inclut la verification avec affichage
                include('controler/repQuizWithDisplay.php'); 
        ?>
    </div>
    <div id="Disconect">
        <form method="POST"  action= <?php echo("index.php?page=deconnexion")?>>
            <input type="submit" class="button" value="Se déconnecter" /> 
        </form>
    </div>
</div>
