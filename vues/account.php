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
            //fonctions
            include("model/utilityQuizz.php");
            include("controler/fonctionVerif.php");
            //user
            $user = $_SESSION["id"];
            $dateTime = (new \DateTime())->format('Y-m-d H:i');
            
            //quiz 1
            $varquiz=1;
            //on charge le quiz 1
            include("model/loadQuizz.php");
            //on récupère les réponses
            include('model/getAnswer.php');
            if ($date!=null){
                //on inclut la vérification avec affichage
                include('controler/repQuizWithDisplay.php'); 
                ?>
                <div id="Supprimer">
                    <form method="POST"  action= <?php echo("index.php?page=suppression&varquiz=".$varquiz)?>>
                        <input type="submit" class="bouton" value="Supprimer résultat quiz 1" /> 
                    </form>
                </div>
                <?php
            }

            //quiz 2
            $varquiz=2;
            //on charge le quiz 2
            include("model/loadQuizz.php");
            //on récupère les réponses
            include('model/getAnswer.php');
            if ($date!=null){
                //on inclut la vérification avec affichage
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
