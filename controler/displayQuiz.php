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
                     <input type="number" name=<?php echo($tabAnswerID[$i][0]."[]");?> placeholder="0" min="0" max="3000"> 
                     <?php
                     break;
 
                 case "select":
                     ?>
                     <select name=<?php echo($i."[]");?>>
                     <option value="">--Choisir--</option>
                     <?php
                     $j=0;
                     foreach($tabLabelReponse[$i] as $label)
                     {
                         ?>
                             <option value=<?php echo("ID".$tabAnswerID[$i][$j]);?>><?php echo($label);?></option>
                         <?php
                         $j++;
                     }
                     ?></select><?php
                     break;  
                 default:
                     $j=0;
                     foreach($tabLabelReponse[$i] as $label)
                     {
                         ?>
                         <label><?php echo($label);?></label>
                         <input type=<?php echo($tabTypeQuestion[$i]);?> name=<?php echo($i."[]");?> value=<?php echo("ID".$tabAnswerID[$i][$j]);?>>
                         <?php
                         $j++;
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
        <input type="submit" value="Reponses">
    </div>
</p>