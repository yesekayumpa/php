<?php
   echo "<table border = 1 width= 90%";
    for ($j =1; $j<=12;$j++) 
    {
    echo"<tr>"; 
    for($k =1; $k <=12;$k++)
    {
    echo "<td>";
    $total=$j*$k;
    echo "$j *$k =$total";
    echo "</td>";
    }
    echo "</tr>";
    }
    echo "<tsble>";
?>