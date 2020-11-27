<?php
        
        $user_email=$_POST["email"];
        $password =$_POST["password"];

        $response = $database->query("SELECT user_password, user_id FROM user WHERE user_mail='$user_email'");
        $pass=$response->fetch();
        
        
        if($pass[0]===$password){
            $_SESSION["id"]=$pass[1];
            echo('connecte');
            header("Location:index.php?page=account");
            
        }
        else
        {
            header("Location:index.php?page=createAccount");
        }
        
        
        
?>