<?php
    $req = "SELECT user_mail FROM user ";
    $res=$database->query($req);
    $tabMail = array();
    while ($donnee = $res->fetch()){
        array_push($tabMail, $donnee[0]);
        
    }

    $user_email1=$_POST["email1"];
    

    foreach($tabMail as $mail){
        

        if($user_email1==$mail){
           
           header("Location:index.php?page=createAccount");
           echo("Cette adresse mail existe déjà");
                
        }
        
        else{
            $req=$database->prepare("INSERT INTO user(user_last_name,user_first_name,user_password,user_mail,user_phone,user_adress,user_birthdate) VALUES (:user_name,:user_prenom,:user_password1,:user_email1,:user_tel,:user_adresse,:user_date)");
            $req->execute(array(
            'user_name'=>htmlspecialchars($_POST["nom"]),
            'user_prenom'=>htmlspecialchars($_POST["prenom"]),
            'user_email1'=>htmlspecialchars($_POST["email1"]),
            'user_tel'=>htmlspecialchars($_POST["tel"]),
            'user_adresse'=>htmlspecialchars($_POST["adresse"]),
            'user_password1'=>htmlspecialchars($_POST["password1"]),
            'user_date'=>htmlspecialchars($_POST["date_naissance"])


                ));
            echo("Bienvenue sur le bazard des films");
            header("Location:index.php?page=createAccount");
            
            break;
            
                
        }
    }
?>