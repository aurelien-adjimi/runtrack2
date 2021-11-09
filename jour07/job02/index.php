<?php

setcookie('nbvisites', 0, time()+ 3600);

if(isset($_POST["Reset"])) {
    unset ($_COOKIE['nbvisites']);   
}

if(isset($_COOKIE['nbvisites'])) {
    setcookie ('nbvisites', $_COOKIE['nbvisites']+1 , time()+ 3600);

}

else {
    $_COOKIE['nbvisites'] = 0;
}
echo $_COOKIE['nbvisites'];

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
<form action="#" method="post">
        <input type="submit" value="Reset" name="Reset">
    </form>
</body>
</html>