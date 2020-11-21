<?php

    function get_quizz_answer_id($id_quizz){

        $req = "SELECT question_id FROM question WHERE question_quizz_id = $id_quizz";
        $res=$database->query($req);
        $tabIdReponse = '(';
        while ($donnee = $res->fetch()){
            $rep_list = array();
            $req2 = "SELECT answer_id FROM answer WHERE answer_question_id = $donnee[0]";
            $res2=$database->query($req2);
            while ($donnee2 = $res2->fetch()){
                $tabIdReponse .= $donnee2[0] .= ',';
            }
            
        }

        $tabIdReponse = substr($tabIdReponse,0,-2);
        $tabIdReponse .= ')';

        return($tabIdReponse);
    }

    function delete_res($userid, $id_quizz){
        $tabIdReponse = get_quizz_answer_id($id_quizz);
        $req = "DELETE FROM user_answer WHERE user_id = $userid answer_id IN $tabIdReponse ";
    }
?>