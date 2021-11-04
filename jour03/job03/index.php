<?php

$str = "I'm sorry Dave I'm afraid I can't do that.";

$tableau = array('a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y');

for ($i = 0; isset($str[$i]); $i++) {

    foreach($tableau as $voyelle) {
        if ($str[$i] == $voyelle) {
            echo $str[$i];
        }
    }
}
?>