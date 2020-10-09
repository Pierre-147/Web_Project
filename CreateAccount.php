<!DOCTYPE html>
<html>
    <head>           
        <link href='css/CACss.css' rel='stylesheet'>
        <link href='css/body.css' rel='stylesheet'>
        <link href='css/HomePage.css' rel='stylesheet'>

    </head>
    <body>
        <?php include('homepage.php') ?>
        <div class='formulaire'>

            <div class='Creation'>
                <h1> Créez votre compte !</h1>
                
                <form method="post" action="CreateAccount.php">
                    <br />
                    <label> Pseudo : </label>
                    <input type="text" placeholder="Pseudo"/><br /><br />
                    <label> E-Mail : </label>
                    <input type="mail" placeholder="e-mail"/><br /><br />
                    <label> Mot de passe :</label>
                    <input type="password" placeholder="mot de passe"/><br /><br />
                    <label> Confirmer votre mot de passe : </label>
                    <input type="password" placeholder="confirmer votre mot de passe"/><br /><br />
            
                    <input type="submit" class= bouton value="Valider" />
                    <br />
                    <br />  
                </form>
            </div>

            <div class='Connection'>
                <h1> Connecter vous !</h1>

                <form method="post" action="CreateAccount.php">
                    <br />
                    <label> Pseudo : </label>
                    <input type="text" placeholder="Pseudo"/><br /><br />
                    
                    <label> Mot de passe :</label>
                    <input type="password" placeholder="mot de passe"/><br /><br />           
                    
                    <input type="submit" class= bouton value="Valider" />
                    <br />
                    <br />  
                </form>
            </div>
        </div>

    </body>
</html>