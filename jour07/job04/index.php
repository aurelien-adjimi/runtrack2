<?php

if (isset($_POST["Reset"])) {
    unset ($_COOKIE["prénom"]);
    setcookie('prénom');
    header('location: index.php');
}

    if(isset($_POST["Connexion"])) {
        setcookie('prénom', $_POST["prénom"], time()+ 3600);
        header('location: index.php');
    } 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if (!isset($_COOKIE['prénom'])) {
        echo '<form action="#" method="post">
        <input type="text" name="prénom">
        <input type="submit" value="Connexion" name="Connexion"></form>';
        
    }
    else {
        echo 'Bonjour '.  $_COOKIE["prénom"];
        echo '<br/> <form action="#" method="post"><input type="submit" value="Déco" name="Reset">
    </form>';
    }
    ?>
</body>
</html>
   
