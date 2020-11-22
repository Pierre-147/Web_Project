<div id="content-wrap">
    <h3> Votre Compte :</h3>
    <p id="Bienvenue"> Bienvenue <?php echo(getName($_SESSION["id"], $database));?></p>
    <div id="Disconect">
        <form method="POST"  action= <?php echo("index.php?page=deconnexion")?>>
            <input type="submit" class="bouton" value="Se déconnecter" /> 
        </form>
    </div>
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
            if ($date!=null){
                //on inclut la verification avec affichage
                include('controler/repQuizWithDisplay.php'); 
                ?>
                <div id="Supprimer">
                    <form method="POST"  action= <?php echo("index.php?page=suppression&varquiz=".$varquiz)?>>
                        <input type="submit" class="bouton" value="Supprimer résultat quiz 1" /> 
                    </form>
                </div>
                <?php
            }
            $varquiz=2;
            include("model/loadQuizz.php");
            //on recupere les reponses
            include('controler/get_answer.php');
            if ($date!=null){
                //on inclut la verification avec affichage
                include('controler/repQuizWithDisplay.php'); 
                ?>
                <div id="Supprimer">
                    <form method="POST"  action= <?php echo("index.php?page=suppression&varquiz=".$varquiz)?>>
                        <input type="submit" class="bouton" value="Supprimer résultat quiz 2" /> 
                    </form>
                </div>
                <?php
            }
        ?>
        <br/>
    </div>
</div>
