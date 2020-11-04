<?php 
for($i =0; $i<count($tabQuestion); $i++)
{
    ?>
    <label id="question" for=<?php echo("q".($i+1))?>><?php echo("Question ".($i+1)." ".$tabQuestion[$i]);?></label>
    <div id="reponsePossible">
        <p>
            <?php
            $type = $i+1;      //type de reponse 
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
                <input type="number" name=<?php echo("q".($i+1))?> placeholder="2000" min="0" max="3000"> 
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