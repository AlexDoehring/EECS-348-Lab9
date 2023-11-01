<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['mult'];

        if ($num <= 0) {
            echo "<h3>Your number is too small!</h3>";
        }
        else {
            echo "<h2>Multiplication Table for 1 to $num</h2>";
            echo "<table border='1'>";

            echo "<tr>";
            echo "<th>&times;</th>";
            for ($col = 1; $col <= $num; $col++) {
                echo "<th>$col</th>";
            }
            echo "</tr>";
            
            for ($row = 1; $row <= $num; $row++) {
                echo "<tr>";
                echo "<th>$row</th>";
                for ($col = 1; $col <= $num; $col++) {
                    echo "<td>" . ($row * $col) . "</td>";
                }
                echo "</tr>";
            }
            
            echo "</table>";
        }
    }
?>