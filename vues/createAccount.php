<head>
    <meta charset="iso-8859-1"/>
    <title>Account</title>
    <link href='css/createAccount.css' rel='stylesheet'>
    <link href='css/body.css' rel='stylesheet'>
    <link href='css/homePage.css' rel='stylesheet'>
</head>

<div id="content-wrap">
    <div class='formulaire'>
        <div class='Creation'>
            <h1> Créez votre compte !</h1>
            
            <form method="post" action="createAccount.php">
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

            <form method="post" action="createAccount.php">
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

    <?php
        $password="mot";
        $lastName="Husson";
        $firstName="Laetitia";

        $response = $database->query("SELECT user_password FROM user WHERE user_last_name ='$lastName'  AND user_first_name='$firstName'");
        $pass=$response->fetch();
        
        if($pass[0]==$password){
            
            echo('connecte');
            
        }
        else{
            echo('non connecte');

        }
        

    ?>
</div>

