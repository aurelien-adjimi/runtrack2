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
        <input type="text" name="Nom">
        <input type="text" name="Prenom">
        <input type="submit" value="Entrer">
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
</tr>

</thead>
<tbody>
<?php 

foreach ($_GET as $key => $value) {
    echo '
    <tr>
        <td>'.$key.'</td>
        <td>'.$value.'</td>
    </tr>
    ';
}

?>
    </tbody>
    </table>
</body>
</html>