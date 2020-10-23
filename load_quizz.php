<?php include('header.php');?>
        <?php
            $req = "SELECT quizz_name FROM quizz WHERE quizz_id = 1";
            $res=$database->query($req);
            $title = $res->fetch()[0];

            $req = "SELECT question_title FROM question WHERE question_quizz_id = 1";
            $res=$database->query($req);
            $tabQuestion = array();
            while ($donnee = $res->fetch()){
                array_push($tabQuestion, $donnee[0]);
            }
            
            $req = "SELECT question_id FROM question WHERE question_quizz_id = 1";
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

            
            $req = "SELECT question_id FROM question WHERE question_quizz_id = 1";
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
        ?>