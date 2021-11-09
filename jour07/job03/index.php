<?php

session_start();

if (isset($_POST["Reset"])) {
    unset ($_SESSION["prénom"]);
}

    if (!isset($_SESSION["prénom"])) {
        $_SESSION["prénom"] = [];
    }

    if(isset($_POST["Soumettre"])) {
    array_push($_SESSION["prénom"], $_POST["prénom"]);
    }

    foreach($_SESSION["prénom"] as $value) {
        echo ($value.'<br/>');
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
<form action="#" method="post">
    <input type="text" name="prénom">
    <input type="submit" name="Soumettre">
    <input type="submit" value="Reset" name="Reset">
    </form>
</body>
</html>