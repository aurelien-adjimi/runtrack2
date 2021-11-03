<?php

for ($i = 0; $i <= 100; $i++) {
    if (!($i % 3) && !($i % 5)) {
        echo "FizzBuzz";
    } elseif (!($i %5)){
        echo "Buzz";
    } elseif (!($i % 3)) {
        echo "Fizz";
    }
    echo $i;
    echo "<br/>";
}
?>