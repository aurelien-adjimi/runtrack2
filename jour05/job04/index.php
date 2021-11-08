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

//echo calcule (5, '*', 5);

?>