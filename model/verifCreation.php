<?php
    $req = "SELECT user_mail FROM user ";
    $res=$database->query($req);
    $tabMail = array();
    while ($donnee = $res->fetch()){
        array_push($tabMail, $donnee[0]);
        
    }

    //on définit les variables
    $user_email1 = isset($_POST["email1"])?$_POST["email1"]:"";;
    $prenom = isset($_POST["prenom"])?$_POST["prenom"]:"";
    $nom = isset($_POST["nom"])?$_POST["nom"]:"";
    $tel = isset($_POST["tel"])?$_POST["tel"]:"";
    $adress = isset($_POST["adresse"])?$_POST["adresse"]:"";
    $tel = isset($_POST["tel"])?$_POST["tel"]:"";
    
    $mdp1 = isset($_POST["password1"])?$_POST["password1"]:"";
    $mdp2 = isset($_POST["password2"])?$_POST["password2"]:"";

    //on ajuste le format de date 
    if (empty($_POST["dateNaissance"]))
    {
        $dateNaissance = null;
    }
    else
    {
        $date = new DateTime($_POST["dateNaissance"]);
        $dateNaissance = htmlspecialchars($date->format('Y-m-d'));
    }

    //on regarde si l'adresse mail n'existe pas
    foreach($tabMail as $mail)
    {
        if($user_email1==$mail)
        {
            $_SESSION["creation"]="Cette adresse mail existe déjà";
            header("Location:index.php?page=createAccount");
            exit();
            break;
        }
    }
    //on regarde si les deux mots de passe correspondent
    if ($mdp1 != $mdp2)
    {
        $_SESSION["creation"]="Les mots de passe ne sont pas identiques";
        header("Location:index.php?page=createAccount");
        exit();
    }
    //champ obligatoire
    if(empty($prenom) || empty($nom) || empty($user_email1) || empty($mdp1))
    {
        $_SESSION["creation"]="Veuillez remplir les champs obligatoires (*)";
        header("Location:index.php?page=createAccount");
        exit();
    }
    //on peut créer le compte
    else
    { 

        $req=$database->prepare("INSERT INTO user(user_last_name,user_first_name,user_adress,user_phone,user_birthdate,user_password,user_mail) VALUES (:nom,:prenom,:adresse,:tel,:birth,:pass,:mail)");
        $req->execute(array(
            'nom'=>htmlspecialchars($nom),
            'prenom'=>htmlspecialchars($prenom),
            'adresse'=>htmlspecialchars($adress),
            'tel'=>htmlspecialchars($tel),
            'birth'=>$dateNaissance,
            'pass'=>htmlspecialchars($mdp1),
            'mail'=>htmlspecialchars($user_email1)
        ));

        $_SESSION["creation"]="Vous pouvez maintenant vous connecter";
        header("Location:index.php?page=createAccount"); 
        exit();
    }
?>