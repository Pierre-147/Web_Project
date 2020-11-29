<?php
    // Load the name of the users in its own variable
    $req = "SELECT user_last_name, user_first_name, user_id FROM user";
    $res=$database->query($req);
    $tabprenom = array();
    while ($donnee = $res->fetch()){
        array_push($tabprenom, [$donnee[0],$donnee[1],$donnee[2]]);
    }
?>