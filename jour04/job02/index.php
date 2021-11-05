<?php

var_dump($_GET);



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
<form action="#" method="get">
        <input type="text" name="nom">
        <input type="text" name="prenom">
        <input type="submit" value="entrer">
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
</tr>
<tr>
    <td><?php echo($_GET["nom"])?></td>
    <td><?php echo($_GET["prenom"])?></td>
</tr>
</thead>
    </table>
</body>
</html>