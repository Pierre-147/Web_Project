<html>
    <body> 
    <form method="post" action="Quizzpage2.php">
            <!--Question 1-->
            <div>
            <input type="radio" id="rep1q1" name="question1" value="rep1q1">
            <label for="rep1q1">Réponse 1</label>
            </div>

            <div>
            <input type="radio" id="rep2q1" name="question1" value="rep2q1">
            <label for="rep2q1">Réponse 2</label>
            </div>

            <div>
            <input type="radio" id="rep3q1" name="question1" value="rep3q1">
            <label for="rep3q1">Réponse 3</label>
            </div>

            <div>
            <input type="radio" id="rep4q1" name="question1" value="rep4q1">
            <label for="rep4q1">Réponse 4</label>
            </div>

            <!--Question 2-->
            <div>
            <input type="checkbox" id="rep1q2" name="rep1q2">
            <label for="rep1q1">Réponse 1</label>
            </div>

            <div>
            <input type="checkbox" id="rep2q2" name="rep2q2">
            <label for="rep2q2">Réponse 2</label>
            </div>

            <div>
            <input type="checkbox" id="rep3q2" name="rep3q2">
            <label for="rep3q2">Réponse 3</label>
            </div>

            <div>
            <input type="checkbox" id="rep4q2" name="rep4q2">
            <label for="rep4q2">Réponse 4</label>
            </div>

            <!--Question 3-->
            <div>
            <label for="q3-select">Choisissez une réponse :</label>

            <select name="q3" id="q3-select">
            <option value="">--Choisissez une option--</option>
            <option value="rep1q3">Réponse 1</option>
            <option value="rep2q3">Réponse 2</option>
            <option value="rep3q3">Réponse 3</option>
            <option value="rep4q3">Réponse 4</option>
            </select>
            </div>

            <!--Question 4-->
            <div>
            <label for="q4">Choisissez un nombre (10-100):</label>
            <input type="number" id="repq4" name="repq4"min="10" max="100">
            </div>
        </form>
    </body>
</html>