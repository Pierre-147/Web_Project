<head>
    <meta charset="iso-8859-1"/>
    <title>Quiz <?php echo($varquiz." : ".$title);?></title>
    <link href="../css/quiz1.css" rel="stylesheet"/>
    <link href="../css/body.css" rel="stylesheet"/>
</head>

<div id="content-wrap">
    <h3>Quiz <?php echo($varquiz." : ".$title);?></h3>
    <br/>
    <form action=<?php echo("../controler/index.php?page=result&varquiz=".$varquiz)?> method="POST">
        <?php
        for($i =0; $i<count($tabQuestion); $i++)
        {
            ?>
            <label id="question" for=<?php echo("q".($i+1))?>><?php echo("Question ".($i+1)." ".$tabQuestion[$i]);?></label>
            <div id="reponsePossible">
                <p>
                    <?php
                    $type = $tabTypeQuestion[$i];      //type de reponse 
                    if ($type == 1)
                    {
                        for($j=0; $j<count($tabLabelReponse[$i]); $j++)
                        {
                            ?>
                            <label><?php echo($tabLabelReponse[$i][$j]);?></label>
                            <input type="radio" name=<?php echo("q".($i+1))?> value=<?php echo(urlencode($tabLabelReponse[$i][$j]));?>>
                            <?php
                        }
                    }
                    else if ($type == 2)
                    {
                        for($j=0; $j<count($tabLabelReponse[$i]); $j++)
                        {
                            ?>
                            <label><?php echo($tabLabelReponse[$i][$j]);?></label>
                            <input type="checkbox" name=<?php echo("q".($i+1)."[]")?> value=<?php echo(urlencode($tabLabelReponse[$i][$j]));?>>
                            <?php
                        }
                    }
                    else if ($type == 3)
                    {
                        ?>
                        <select name=<?php echo("q".($i+1))?>>
                        <option value="">--Please choose an option--</option>
                        <?php
                        for($j=0; $j<count($tabLabelReponse[$i]); $j++)
                        {
                            ?>
                                <option value=<?php echo(urlencode($tabLabelReponse[$i][$j]));?>><?php echo($tabLabelReponse[$i][$j]);?></option>
                            <?php
                        }
                        ?></select><?php
                    }
                    else if($type == 4)
                    {
                        ?>
                        <input type="number" name=<?php echo("q".($i+1))?> placeholder="0" min="0" max="3000"> 
                        <?php
                    }     
                    ?>
                </p>
            </div>
            <?php
        }
        ?>
        <p>
            <div id="reponsePossible">
                <input type="submit" value="Repondre">
            </div>
        </p>
    </form>
</div>