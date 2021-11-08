<?php

    $hauteur = 10;
    $longueur = 20;

    echo "<table><tbody>";

    for ($l = 1; $l <= $hauteur ; $l++) {
        echo "<tr><td>/</td>";

        $test = 0;
        while($test<=5){
            echo str_repeat("<td>_</td>", $test++);
        }
        echo "<td>\</td></tr>";
    }

    for ($i = 1; $i <= $hauteur - 1; $i++) {
        echo "<tr><td>|</td>";
        for ($j = 1; $j <= $longueur - 2; $j++) {
            echo "<td> </td>";
        }
        echo "<td>|</td></tr>";

    }
    echo "<tr><td>|</td>";
    for ($k = 1; $k <= $longueur - 2; $k++) {
        echo "<td>_</td>";
    }
    echo "<td>|</td></tr>";

    echo "</tbody></table>
    <style> body {display: flex; align-items: center; justify-content: center;}
            table {border-spacing: 0;}
    </style>";
?>
