<?php

$connection = mysql_connect("localhost","root","");
$db = mysql_select_db("rugbydb", $connection);
mysql_set_charset('utf8',$connection);
$new = "SELECT * FROM news order by id desc";
$result = mysql_query($new);
        echo"<table border='1'>";
        echo"<tr>";
        echo"<th>Title</th><th>Content</th><th>Dodany</th>";
        echo"</tr>";
while($row = mysql_fetch_array($result)){
            echo "<tr>";
            echo "<td>". $row['Title']. "</td><td>".$row['Content']."</td><td>".$row['added_at']. "</td>";
            echo "</tr>";

}
    echo"</table>";

mysql_close($connection);
        



