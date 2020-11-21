<?php
    include('utility_quizz.php');

    $user = $_SESSION['user_id'];


    $tabIdReponse = get_quizz_answer_id($varquiz, $database);



    $req = "SELECT answer_id, answer_value FROM user_answer WHERE user_id = $user AND answer_id IN $tabIdReponse";
    $res=$database->query($req);
    $tabAnswer = array();
    while($donnee = $res->fetch()){
        
        $tabAnswer[$donnee[0]] = $donnee[1];
        
    }

    $tabKey = array_keys($tabAnswer);

    foreach($tabKey as $key){
        if ($tabAnswer[$key] == ''){
            $req = "SELECT answer_text FROM answer WHERE answer_id = $key";
            $res=$database->query($req);
            while($donnee = $res->fetch()){
                $tabAnswer[$key] = $donnee[0];
            }
        }
    }
    var_dump($tabAnswer);

?>

