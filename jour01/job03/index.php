<!DOCTYPE html>
<?php

$boobool = true;
$entier = 2;
$flotte = 5.5;
$phrase = "Hello PHP";

?>

<html>
    <head>
    <meta charset="UTF-8">
    <title>Tableau</title>
    </head>
    <body>
        <table border = "1">
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
            <tr>
                <td>Booléen</td>
                <td>$boobool</td>
                <td><?php echo $boobool; ?></td>
            </tr>
            <tr>
                <td>Entier</td>
                <td>$entier</td>
                <td><?php echo $entier; ?></td>
            </tr>
            <tr>    
                <td>Chaine de Caractère</td>
                <td>$phrase</td>
                <td><?php echo $phrase; ?></td>
            </tr>
            <tr>
                <td>Float</td>
                <td>$flotte</td>
                <td><?php echo $flotte; ?></td>
            </tr>
</table>
</body>
</html>