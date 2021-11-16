<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php

if (isset($_POST['submit'])) {
if ($_POST['Style'] == 'style1') {
    echo '<link rel= "stylesheet" href="./style1.css">';
}
elseif ($_POST['Style'] == 'style2') {
    echo '<link rel= "stylesheet" href="./style2.css">';
}
elseif ($_POST['Style'] == 'style3') {
    echo '<link rel= "stylesheet" href="./style3.css">';
}
}

?>
</head>
<body>
<form action="#" method="post">
        <select name="Style">
            <option value="style1">Style 1</option>
            <option value="style2">Style 2</option>
            <option value="style3">Style 3</option>
        <input type="submit" value="Choisir" name="submit">
    </form>
</body>
</html>