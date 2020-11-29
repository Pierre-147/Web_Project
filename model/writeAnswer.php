<?php
function writeID($database, $user, $answerId, $dateTime)
{
    $req = $database->prepare("INSERT INTO `user_answer`(`user_id`, `answer_id`, `user_answer_date`) VALUES (:user, :id, :dateAnswer)");
    $req->execute(array(
        'user' => htmlspecialchars($user),
        'id' => htmlspecialchars($answerId),
        'dateAnswer' => htmlspecialchars($dateTime),
    ));
}

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
    foreach($elem as $el)
    {
        $var = $el;
        if (strpos($el, "ID")===0)  //pas un input text
        {
            $id = substr($el, 2, strlen($el));
            writeID($database, $user, $id, $dateTime);
        }
        else        //input text ou sélecteur vide (ne doit pas être écrit dans la bdd)
        {
            if (strpos($tabKey[$i], "select") === false)        //input donc on peut écrire
            {
                $value = $el;
                $id = $tabKey[$i];
                writeValue($database, $user, $id, $value, $dateTime);
            }
        }
    }
    $i++;
}

?>