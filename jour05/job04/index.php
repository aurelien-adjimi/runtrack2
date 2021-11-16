<?php

function calcule ($a, $operation, $b) {
if ($operation == "+") {
    $result = $a + $b;
}
if ($operation == "-") {
    $result = $a - $b;
}
if ($operation == "/") {
    $result = $a / $b;
}
if ($operation == "*") {
    $result = $a * $b;
}
if ($operation == "%") {
    $result = $a % $b;
}

return $result; 

}

/*lever le commentaire pour afficher le résultat.*/ //echo calcule (5, '*', 5);

?>