<?php

$bdd = mysqli_connect("localhost", "root", "", "jour08");

$req = mysqli_query($bdd, "SELECT nom, capacite FROM salles");

$res = mysqli_fetch_all($req, MYSQLI_ASSOC);


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
<table border="1">
<?php
echo "<thead><tr>";
foreach ($res[0] as $key => $value) {
    echo "<th>$key</th>";
}

echo "</thead>";

foreach ($res as $key => $value) {
    echo "<tr>";
    foreach ($value as $value2) {
        echo "<td>$value2</td>";
    }
    echo "</tr>";
}
echo "</tbody>";    
?>
    </table>
</body>
</html>