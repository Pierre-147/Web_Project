<?php
    // Load the name of the quizz in its own variable
    $req = "SELECT quizz_name FROM quizz WHERE quizz_id = $varquiz";
    $res=$database->query($req);
    $title = $res->fetch()[0];

    // put all of this qizz's question wording in an array
    $req = "SELECT question_title FROM question WHERE question_quizz_id = $varquiz";
    $res=$database->query($req);
    $tabQuestion = array();
    while ($donnee = $res->fetch()){
        array_push($tabQuestion, $donnee[0]);
    }

    // create an array with the different answers for each questions
    $req = "SELECT question_id FROM question WHERE question_quizz_id = $varquiz";
    $res=$database->query($req);
    $tabLabelReponse = array();
    while ($donnee = $res->fetch()){
        $rep_list = array();
        $req2 = "SELECT answer_text FROM answer WHERE answer_question_id = $donnee[0]";
        $res2=$database->query($req2);
        while ($donnee2 = $res2->fetch()){
            array_push($rep_list, $donnee2[0]);
        }
        array_push($tabLabelReponse, $rep_list);
    }

    // create an array with the validity of the different answers of each questions (0 false, 1 true)
    $req = "SELECT question_id FROM question WHERE question_quizz_id = $varquiz";
    $res=$database->query($req);
    $tabReponse = array();
    while ($donnee = $res->fetch()){
        $validity_list = array();
        $req2 = "SELECT is_valid_answer FROM answer WHERE answer_question_id = $donnee[0]";
        $res2=$database->query($req2);
        while ($donnee2 = $res2->fetch()){
            array_push($validity_list, $donnee2[0]);
        }
        array_push($tabReponse, $validity_list);
    }


    // create an array with the type of the different questions 
    $req = "SELECT question_input_type FROM question WHERE question_quizz_id = $varquiz";
    $res=$database->query($req);
    $tabTypeQuestion = array();
    while ($donnee = $res->fetch()){
        array_push($tabTypeQuestion, $donnee[0]);
    }
?>