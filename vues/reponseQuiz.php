<head>
    <meta charset="iso-8859-1"/>
    <title>Reponses : <?php echo($title);?></title>
    <link href="css/quiz.css" rel="stylesheet"/>
    <link href="css/body.css" rel="stylesheet"/>
</head>

<div id="content-wrap">
    <h3>Quiz <?php echo($varquiz." : ".$title);?></h3>
    <br/>
    <?php 
    //on rajoute les fonctions de verification
    include('controler/verifQuiz.php');
    $i=0;
    foreach($tabQuestion as $question)
    {
        ?>
        <label id="question" for=<?php echo("q".($i+1))?>><?php echo("Question ".($i+1)." : ".$question);?></label>
        <div id="reponsePossible">
            <p>
                <?php
                switch($tabTypeQuestion[$i])
                {
                    case "radio":
                        verifRadio($i, $tabReponse, $tabLabelReponse);
                        break;
                    case "checkbox":
                        verifCheck($i, $tabReponse, $tabLabelReponse);
                        break;
                    case "select":
                        verifSelect($i, $tabReponse, $tabLabelReponse);
                        break;
                    case "input":
                        verifInput($i, $tabReponse, $tabLabelReponse);
                        break;
                }
                ?>
            </p>
        </div>
        <?php
        $i++;
    }
    ?>
</div>