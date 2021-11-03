<?php

for ($j = 0; $j <= 100; $j++) {
    if ($j <= 20) {
        echo "<i>".$j."</i>";
        echo "<br/>";
    } elseif ($j == 42) {
        echo "La Plateforme_";
        echo "<br/>";
    } elseif (($j >= 25) && ($j <= 50)) {
        echo "<u>".$j."</u>";
        echo "<br/>";
    } else {
    echo $j;
    echo "<br/>";
    } 
}

?>