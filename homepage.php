<?php include('ouverture.php'); 
$req = "SELECT answer_text FROM answer WHERE answer_question_id = 2";
$res=$database->query($req);
while ($donnee=$res->fetch()){
    echo($donnee[0]);
}
    

?>

<html>
<head>
  <link href="css/HomePage.css" rel="stylesheet" type="text/css">
  <link href="css/body.css" rel="stylesheet"/>
 </head>
    <body background="image/imageserie.jpg">
        <?php include('header.php');?>
        <div> 
            <p id='home' Align=CENTER> Bienvenue sur votre site de film et série </p>
        </div>
        <?php include('footer.php');?>
    </body>
</html>