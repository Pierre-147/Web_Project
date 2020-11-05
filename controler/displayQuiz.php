<?php
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
                case "input":
                    ?>
                    <input type="number" name=<?php echo("q".($i+1))?> placeholder="0" min="0" max="3000"> 
                    <?php
                    break;

                case "select":
                    ?>
                    <select name=<?php echo("q".($i+1))?>>
                    <option value="">--Please choose an option--</option>
                    <?php
                    foreach($tabLabelReponse[$i] as $label)
                    {
                        ?>
                            <option value=<?php echo(urlencode($label));?>><?php echo($label);?></option>
                        <?php
                    }
                    ?></select><?php
                    break;  
                default:
                    foreach($tabLabelReponse[$i] as $label)
                    {
                        ?>
                        <label><?php echo($label);?></label>
                        <input type=<?php echo($tabTypeQuestion[$i]);?> name=<?php echo("q".($i+1)."[]")?> value=<?php echo(urlencode($label));?>>
                        <?php
                    }
                    break;
            }
            ?>
        </p>
    </div>
    <?php
    $i++;
}
?>
<p>
    <div id="reponsePossible">
        <input type="submit" value="Repondre">
    </div>
</p>