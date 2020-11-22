<header>
    <div id = title>
        <a href = "index.php?page=homepage">Le bazard des films</a>
    </div>
    <div id = 'links'>
        <div id = 'drop'>Nos Quiz
            <nav class = "child">
                <a href = "index.php?page=quizz&varquiz=1">Quiz 1</a>
                <a href = "index.php?page=quizz&varquiz=2">Quiz 2</a>
            </nav>
        </div>
        <a href = 'index.php?page=classement'>Classement général</a>
        <a href = 'index.php?page=createAccount'>Votre compte</a>
        <p id= 'welcome'>
            <?php echo("Bienvenue ".$name) ; ?>
        </p>
    </div>
</header>