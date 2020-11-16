<?php
echo "<table border =\"5\" >";
    //Hint to self start at 1 due to 0 being empty 
    //Trying to get the empty one space and and the borders of row and columns. 
echo "<tr>";
echo "<td > </td> \n";
    //Get the col
        for ($col=1; $col <= 100; $col++) {
            echo "<td>$col</td> \n";
        }
    echo "</tr>";
    //Get the result using nested for loop.
    for ($row=1; $row <= 100; $row++) {
        echo "<tr> \n";
        echo "<td>$row</td>";
        for ($col=1; $col <= 100; $col++) {
            $result = $col * $row;
            echo "<td>$result</td> \n";
        }
        echo "</tr>";
    }
echo "</table>";
?>