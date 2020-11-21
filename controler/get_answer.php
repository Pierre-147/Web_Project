<?php
    include('../model/ouverture.php');
    include('utility_quizz.php');
    $user = $_SESSION['user'];
    $varquiz = 2;


    $tabIdReponse = get_quizz_answer_id($varquiz);



    $req = "SELECT answer_id, value_answer FROM user_answer WHERE answer_id IN $tabIdReponse";
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
                var_dump($donnee);
                $tabAnswer[$key] = $donnee[0];
            }
        }
    }

    

?>

