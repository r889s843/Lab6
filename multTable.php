<?php
//loop uses indexes i j to set multiplication table
for ($i = 0; $i < 101; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 101; $j++) {
        if ($i == 0 && $j == 0) {
            echo "<td></td>";
        }
        elseif ($i == 0) {
            echo "<td>$j</td>";
        }
        elseif ($j == 0) {
            echo "<td>$i</td>";
        }
        else {
            $num = ($j) * ($i);
            echo "<td>$num</td>";
        }
    }
    echo "</tr>";
}


?>