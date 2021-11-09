<?php

setcookie('nbvisites', '0', time()+ 3600);
if(isset($_COOKIE['nbvisites'])) {
    $_COOKIE['nbvisites']++;
}

else {
    $_COOKIE['nbvisites'] = 0;
}
echo $_COOKIE['nbvisites'];

?>