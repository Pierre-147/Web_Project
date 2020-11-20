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
            if(empty($_POST["date_naissance"])){
                $req=$database->prepare("INSERT INTO user(user_last_name,user_first_name,user_password,user_mail,user_phone,user_adress) VALUES (:user_name,:user_prenom,:user_password1,:user_email1,:user_tel,:user_adresse)");
                $req->execute(array(
                'user_name'=>htmlspecialchars($_POST["nom"]),
                'user_prenom'=>htmlspecialchars($_POST["prenom"]),
                'user_email1'=>htmlspecialchars($_POST["email1"]),
                'user_tel'=>htmlspecialchars($_POST["tel"]),
                'user_adresse'=>htmlspecialchars($_POST["adresse"]),
                'user_password1'=>htmlspecialchars($_POST["password1"])
                


                    ));
                echo("Bienvenue sur le bazard des films");
                header("Location:index.php?page=createAccount");
                
            break;
            }
            elseif(empty($_POST["tel"])){
                $req=$database->prepare("INSERT INTO user(user_last_name,user_first_name,user_password,user_mail,user_adress) VALUES (:user_name,:user_prenom,:user_password1,:user_email1,:user_adresse)");
                $req->execute(array(
                'user_name'=>htmlspecialchars($_POST["nom"]),
                'user_prenom'=>htmlspecialchars($_POST["prenom"]),
                'user_email1'=>htmlspecialchars($_POST["email1"]),
                'user_adresse'=>htmlspecialchars($_POST["adresse"]),
                'user_password1'=>htmlspecialchars($_POST["password1"]),
                'user_date'=>htmlspecialchars($_POST["date_naissance"])


                    ));
                echo("Bienvenue sur le bazard des films");
                header("Location:index.php?page=createAccount");
                
            break;
            }
            elseif(empty($_POST["adresse"])){
                $req=$database->prepare("INSERT INTO user(user_last_name,user_first_name,user_password,user_mail,user_phone) VALUES (:user_name,:user_prenom,:user_password1,:user_email1,:user_tel)");
                $req->execute(array(
                'user_name'=>htmlspecialchars($_POST["nom"]),
                'user_prenom'=>htmlspecialchars($_POST["prenom"]),
                'user_email1'=>htmlspecialchars($_POST["email1"]),
                'user_tel'=>htmlspecialchars($_POST["tel"]),
                'user_password1'=>htmlspecialchars($_POST["password1"]),
                'user_date'=>htmlspecialchars($_POST["date_naissance"])


                    ));
                echo("Bienvenue sur le bazard des films");
                header("Location:index.php?page=createAccount");
                
            break;
            }
            elseif(empty($_POST["adresse"])&& empty($_POST["tel"])&& empty($_POST["date_naissance"])){
                $req=$database->prepare("INSERT INTO user(user_last_name,user_first_name,user_password,user_mail) VALUES (:user_name,:user_prenom,:user_password1,:user_email1)");
                $req->execute(array(
                'user_name'=>htmlspecialchars($_POST["nom"]),
                'user_prenom'=>htmlspecialchars($_POST["prenom"]),
                'user_email1'=>htmlspecialchars($_POST["email1"]),
                'user_password1'=>htmlspecialchars($_POST["password1"])
                


                    ));
                echo("Bienvenue sur le bazard des films");
                header("Location:index.php?page=createAccount");
                
                break;
            }
            elseif(empty($_POST["adresse"])&& empty($_POST["tel"])){
                $req=$database->prepare("INSERT INTO user(user_last_name,user_first_name,user_password,user_mail,user_birthdate) VALUES (:user_name,:user_prenom,:user_password1,:user_email1,:user_date)");
                $req->execute(array(
                'user_name'=>htmlspecialchars($_POST["nom"]),
                'user_prenom'=>htmlspecialchars($_POST["prenom"]),
                'user_email1'=>htmlspecialchars($_POST["email1"]),
                'user_password1'=>htmlspecialchars($_POST["password1"]),
                'user_date'=>htmlspecialchars($_POST["date_naissance"])


                    ));
                echo("Bienvenue sur le bazard des films");
                header("Location:index.php?page=createAccount");
                
                break;
            }
            elseif(empty($_POST["adresse"])&& empty($_POST["date_naissance"])){
                $req=$database->prepare("INSERT INTO user(user_last_name,user_first_name,user_password,user_mail,user_phone) VALUES (:user_name,:user_prenom,:user_password1,:user_email1,:user_tel)");
                $req->execute(array(
                'user_name'=>htmlspecialchars($_POST["nom"]),
                'user_prenom'=>htmlspecialchars($_POST["prenom"]),
                'user_email1'=>htmlspecialchars($_POST["email1"]),
                'user_tel'=>htmlspecialchars($_POST["tel"]),
                'user_password1'=>htmlspecialchars($_POST["password1"])


                    ));
                echo("Bienvenue sur le bazard des films");
                header("Location:index.php?page=createAccount");
                
                break;
            }
            elseif(empty($_POST["tel"])&& empty($_POST["date_naissance"])){
                $req=$database->prepare("INSERT INTO user(user_last_name,user_first_name,user_password,user_mail,user_adress) VALUES (:user_name,:user_prenom,:user_password1,:user_email1,:user_adresse)");
                $req->execute(array(
                'user_name'=>htmlspecialchars($_POST["nom"]),
                'user_prenom'=>htmlspecialchars($_POST["prenom"]),
                'user_email1'=>htmlspecialchars($_POST["email1"]),
                'user_adresse'=>htmlspecialchars($_POST["adresse"]),
                'user_password1'=>htmlspecialchars($_POST["password1"])


                    ));
                echo("Bienvenue sur le bazard des films");
                header("Location:index.php?page=createAccount");
                
                break;
            }
            elseif(empty($_POST["adresse"])&& empty($_POST["tel"])&& empty($_POST["date_naissance"])&& empty($_POST["nom"])&& empty($_POST["prenom"])&& empty($_POST["email1"])&& empty($_POST["password1"])){
               
                header("Location:index.php?page=createAccount");
                
                break;
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
                echo("Vous pouvez maintenant vous connecter");
                header("Location:index.php?page=createAccount");
                
                break;
            }
        }
            
                
        
    }
?>