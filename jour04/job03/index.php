<?php 

$count = 0;

var_dump($_POST);

foreach ($_POST as $value) {
    if ($value != '') {
        $count = $count + 1;
    }
}
    echo $count;

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
        <input type="text" name="nom">
        <input type="text" name="prenom">
        <input type="submit" value="entrer">
    </form>
</body>
</html>