<?php

$str = "On n'est pas le meilleur quand on le croit mais quand on le sait.";
$count_voy = 0;
$count_cons = 0;

$dic = [
    'consonnes' =>  ['B', 'C', 'D', 'F', 'G', 'H', 'J', 'K', 'L', 'M', 'N', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Z', 'b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z'],
    'voyelles' => ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'],
    ];
?>

    <table border="1">
        <thead>
            <tr>
                <th>Consonnes</th>
                <th>Voyelles</th>
</tr>
</thead>
<tbody>
    <tr>
        <?php 
        for ($i = 0; isset($str[$i]); $i++) {
            foreach ($dic['consonnes'] as $consonnes) {
                if ($consonnes == $str[$i]) {
                    $count_cons++;
                }
            }
            foreach ($dic['voyelles'] as $voyelles) {
                if ($voyelles == $str[$i]) {
                    $count_voy++;
                }
            }
        }
        echo "<td>".$count_cons."</td>";
        echo "<td>".$count_voy."</td>";
        ?> 
    </tr>
</tbody>
</table>
