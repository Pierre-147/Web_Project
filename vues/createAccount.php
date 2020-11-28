<div id="content-wrap">
    <div id="creation">
        <?php if(isset ($_SESSION["creation"])){
            
                echo($_SESSION["creation"]);
            
            }
        ?>
    </div>
    <div class='formulaire'>
        <div class='Creation'>
            <h1> Créez votre compte !</h1>
            
            <form method="POST" action=<?php echo("index.php?page=verifCreation")?>>
            <br />
                <label> Nom : </label>
                <input type="text" placeholder="Nom" name="nom"/><br /><br />
                <label> Prénom : </label>
                <input type="text" placeholder="Prénom" name="prenom"/><br /><br />
                <label> E-Mail : </label>
                <input type="mail" placeholder="e-mail" name="email1"/><br /><br />
                <label> Adresse postale : </label>
                <input type="adresse" placeholder="Adresse postale" name="adresse"/><br /><br />
                <label> Numéro de téléphone : </label>
                <input type="tel" name="tel"/><br /><br />
                <label> Date de naissance : </label>
                <input type="date" placeholder="2000-01-O1" name="dateNaissance"/><br /><br />
                <label> Mot de passe :</label>
                <input type="password" placeholder="Mot de passe" name="password1"/><br /><br />
                <label> Confirmez votre mot de passe : </label>
                <input type="password" placeholder="Confirmez votre mot de passe" name="password2"/><br /><br />
        
                <input type="submit" class= bouton value="Valider" name="connection" />
                <br />
                <br /> 
            </form>
        </div>

        <div class='Connection'>
            <h1> Connecter vous !</h1>

            <form method="POST" action=<?php echo("index.php?page=verifConnexion")?>>
                <br />
                <label for="email"> E-Mail :  </label>
                <input type="mail" placeholder="e-mail" name="email"/><br /><br />
                
                <label for="password"> Mot de passe :</label>
                <input type="password" placeholder="Mot de passe" name="password"/><br /><br />           
                
                <input type="submit" class= bouton value="Valider"/>
                <br />
                <br />  
            </form>
        </div>
    </div>
    
    
</div>

