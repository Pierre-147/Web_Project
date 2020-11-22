<?php
    function getName($id, $database){
        $response = $database->query("SELECT user_first_name FROM user WHERE user_id=$id");
        $pass=$response->fetch();
        return $pass[0];
        
    }
?>