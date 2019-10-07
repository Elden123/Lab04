<table>
<tr>
<?php
    for($i = 1; $i <= 100; $i++) {
        if($i == 1) {
            echo "<td></td>";
        }
        echo "<td>" . $i . "</td>";
    }
?>
</tr>
<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    for($i = 1; $i <= 100; $i++) {
        echo "<tr>";
        for($j = 1; $j <= 100; $j++) {
            if($j == 1) {
                echo "<td>" . $i . "</td>";
            }
            echo "<td>" . $i * $j . "</td>";
        }
        echo "</tr>";
    }
?>
</table>