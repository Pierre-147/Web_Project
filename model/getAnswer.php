<?php

    $tabIdReponse = get_quizz_answer_id($varquiz, $database);

    $req = "SELECT answer_id, answer_value FROM user_answer WHERE user_id = $user AND answer_id IN $tabIdReponse";
    $res=$database->query($req);
    $tabAnswer = array();
    while($donnee = $res->fetch()){
        
        $tabAnswer[$donnee[0]] = $donnee[1];
        
    }

    $tabKey = array_keys($tabAnswer);

    foreach($tabKey as $key){
        if ($tabAnswer[$key] === NULL){
            $req = "SELECT answer_text FROM answer WHERE answer_id = $key";
            $res=$database->query($req);
            while($donnee = $res->fetch()){
                $tabAnswer[$key] = $donnee[0];
            }
        }
    }
    #tabAnswers now hold the value of every user answer for a given quizz

    $req = "SELECT user_answer_date FROM user_answer WHERE user_id = $user AND answer_id IN $tabIdReponse";
    $res=$database->query($req);
    #get the date at which those answer were given
    $date = $res->fetch()[0];
?>

