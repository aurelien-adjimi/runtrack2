<?php

if (isset ($_GET["Nombre"])) {
    if ($_GET["Nombre"] % 2 == 0) {
        echo 'Nombre pair';
    } 
    else {
        echo "Nombre Impair";
    }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method="get">
        <input type="text" name="Nombre" required>
        <input type="submit" value="Soumettre">
    </form>
</body>
</html>