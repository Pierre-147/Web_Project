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

?>