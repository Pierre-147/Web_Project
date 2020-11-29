<?php
//ecrit dans la BDD, selon l'ID user, l'answerID, ainsi que la date
function writeID($database, $user, $answerId, $dateTime)
{
    $req = $database->prepare("INSERT INTO `user_answer`(`user_id`, `answer_id`, `user_answer_date`) VALUES (:user, :id, :dateAnswer)");
    $req->execute(array(
        'user' => htmlspecialchars($user),
        'id' => htmlspecialchars($answerId),
        'dateAnswer' => htmlspecialchars($dateTime),
    ));
}

//ecrit dans la BDD, selon l'ID user, l'answerID, la valeur entree ainsi que la date
function writeValue($database, $user, $answerId, $value, $dateTime)
{
    $req = $database->prepare("INSERT INTO `user_answer`(`user_id`, `answer_id`, `user_answer_date`, `answer_value`) VALUES (:user, :id, :dateAnswer, :val)");
    $req->execute(array(
        'user' => htmlspecialchars($user),
        'id' => htmlspecialchars($answerId),
        'dateAnswer' => htmlspecialchars($dateTime),
        'val' => htmlspecialchars($value)
    ));
}

//écriture dans la base de données
$i=0;
foreach($_POST as $elem)
{
    $tabKey = array_keys($_POST);
    //on regarde tout le contenu du POST
    foreach($elem as $el)
    {
        $var = $el;
        if (strpos($el, "ID")===0)  //pas un input text
        {
            $id = substr($el, 2, strlen($el));
            //on ecrit dans la BDD uniquement le answerID
            writeID($database, $user, $id, $dateTime);
        }
        else        //input text ou sélecteur vide (ne doit pas être écrit dans la bdd)
        {
            if (strpos($tabKey[$i], "select") === false)        //input donc on peut écrire
            {
                $value = $el;
                $id = $tabKey[$i];
                //on ecrit dans la BDD, l'answerID correspondant à la bonne reponse de la inputQuestion
                //mais aussi la valeur entree par l'utilisateur
                writeValue($database, $user, $id, $value, $dateTime);
            }
        }
    }
    $i++;
}

?>