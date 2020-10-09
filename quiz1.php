<!DOCTYPE html>
<html>
    <head>
        <meta charset="iso-8859-1"/>
        <title>Quiz 1 : Star Wars</title>
        <link href="css/quiz1.css" rel="stylesheet"/>
        <link href="css/body.css" rel="stylesheet"/>
    </head>
    <body>
        <?php include('header.php');?>
        <div id="page-container">
            <h3>Quiz 1: Star Wars</h3>
            <br/>
            <form action="reponseQuiz1.php" method="GET">
                <label id="question" for="q1">Question 1 : Combien de Star Wars à realisé Georges Lucas ?</label> 
                <p>
                    <div id="reponsePossible">
                        <label for>6</label>
                        <input type="radio" id="rep1" name="q1" value="rep1">
                        <label>9</label>
                        <input type="radio" id="rep2" name="q1" value="rep2">
                        <label>11</label>
                        <input type="radio" id="rep3" name="q1" value="rep3">
                    </div>
                </p>
                <label id="question" for="q2">Question 2 : Lesquels de ces personnages ne sont pas des Jedi ?</label> 
                <p>
                    <div id="reponsePossible">
                        <label for>Yoda</label>
                        <input type="checkbox" id="rep1" name="q2a" value="rep1">
                        <label>Jar Jar Binks</label>
                        <input type="checkbox" id="rep2" name="q2b" value="rep2">
                        <label>R2D2</label>
                        <input type="checkbox" id="rep3" name="q2c" value="rep3">
                        <label>Ahsoka Tano</label>
                        <input type="checkbox" id="rep4" name="q2d" value="rep4">
                    </div>
                </p>
                <label id="question" for="q3">Question 3 : Dans La Revanche des Siths, quel adversaire affronte Maitre Yoda ?</label> 
                <p>
                    <div id="reponsePossible">
                        <select name="q3" id="pet-select">
                            <option value="">--Please choose an option--</option>
                            <option value="rep1">Dark Plagueis</option>
                            <option value="rep2">Dark Maul</option>
                            <option value="rep3">Dark Sidious</option>
                        </select>
                    </div>
                </p>
                <label id="question" for="q4">Question 4 : Quel est l'année de sortie du premier Star Wars ?</label> 
                <p>
                    <div id="reponsePossible">
                       <input type="number" id="q4" name="q4" placeholder="2000" min="1800" max="2020"> 
                    </div>
                </p>
                <p>
                    <div id="reponsePossible">
                        <input type="submit" value="Repondre">
                    </div>
                </p>
            </form>
        </div>
        <?php include('footer.php');?>
    </body>
</html>
