<?php
if (isset ($_POST["Username"]) && ($_POST["Password"])) {
if ($_POST["Username"] == 'John' && $_POST["Password"] == 'Rambo') {
    echo "C'est pas ma guerre";
} 
else {
    echo "Votre pire cauchemar";
}
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
        <input type="text" name="Username">
        <input type="text" name="Password">
        <input type="submit" value="Se Connecter">
    </form>
</body>
</html>