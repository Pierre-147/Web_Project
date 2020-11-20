<div id="content-wrap">
    <label>Choisissez le quiz dont vous souhaitez voir le classement :</label>
    <a href = "index.php?page=classement&varquiz=1">Quiz 1</a>
    <a href = "index.php?page=classement&varquiz=2">Quiz 2</a>
    
    <?php 
    if (isset($_GET["varquiz"])){
        include('model/rankingUser.php');
        ?>
        <div id="tab">
        <table>
        <caption>Classement général</caption>

        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Score</th>
            <th>Date</th>
        </tr>
        <?php
        foreach($tabprenom as $names){
            ?>
            <tr>
                <td><?php echo($names[1]);?></td>
                <td><?php echo($names[0]);?></td>
                <td></td>
                <td></td>
            </tr>
            <?php
        }
        ?>
        </table>
        </div>
        <?php 
    }
    ?>
</div>