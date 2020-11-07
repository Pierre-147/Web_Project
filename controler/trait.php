<?php
        
        $user_email=$_POST["email"];
        $password =$_POST["password"];

        $response = $database->query("SELECT user_password,user_first_name FROM user WHERE user_mail='$user_email'");
        $pass=$response->fetch();
        
        if($pass[0]==$password){
            $_SESSION["username"]=$pass[1];
            echo('connecte');
            
        }
       
        header("Location:index.php?page=account")
        
        

?>