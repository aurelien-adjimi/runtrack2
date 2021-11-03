<?php

for ($i = 1; $i <= 100; $i++) {
    if (!($i % 3) && !($i % 5)) {
        echo "FizzBuzz";
        echo "<br/>";
    } elseif (!($i % 5)){
        echo "Buzz";
        echo "<br/>";
    } elseif (!($i % 3)) {
        echo "Fizz";
        echo "<br/>";
    } else {
    echo $i;
    echo "<br/>";  
    } 
}
?>