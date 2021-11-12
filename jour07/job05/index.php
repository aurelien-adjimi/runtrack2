<?php

session_start();

if (isset($_SESSION['case'])) {
    $_SESSION['case'] = 'X';
}

if (isset($_SESSION['case'])) {
    $_SESSION['case'] = 'O';
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
    <table border="1">
<tr>
    <td style="width: 50px; height: 50px;">
        <input type="submit" name="case" value="-">
    </td>
    <td style="width: 50px; height: 50px;">
        <input type="submit" name="case" value="-">
    </td>
    <td style="width: 50px; height: 50px;">
        <input type="submit" name="case" value="-">
    </td>
</tr>
<tr>
    <td style="width: 50px; height: 50px;">
        <input type="submit" name="case" value="-">
    </td>
    <td style="width: 50px; height: 50px;">
        <input type="submit" name="case" value="-">
    </td>
    <td style="width: 50px; height: 50px;">
        <input type="submit" name="case" value="-">
    </td>
</tr>
<tr>
    <td style="width: 50px; height: 50px;">
        <input type="submit" name="case" value="-">
    </td>
    <td style="width: 50px; height: 50px;">
        <input type="submit" name="case" value="-">
    </td>
    <td style="width: 50px; height: 50px;">
    <input type="submit" name="case" value="-">
</td>
</tr>

    </table>
</body>
</html>