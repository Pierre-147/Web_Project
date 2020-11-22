<div id="content-wrap">
    <h3> Votre Compte :</h3>
    <p> Bienvenue <?php echo($_SESSION["username"]);?></p>
    <div id="info">
        <p>Plus de fonctionalités seront disponible prochainement </p>
    </div>
    <div id="Disconect">
        <form method="POST"  action= <?php echo("index.php?page=deconnexion")?>>
            <input type="submit" class="button" value="Se déconnecter" /> 
        </form>
    </div>
</div>

