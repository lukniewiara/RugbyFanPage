<div style="float: left; width: auto; background-color: #CFF; margin-left: 2px;">
	<h1><a href="index.php?page=newsy">Newsy</a></h1>
    <?php

$connection = mysql_connect("localhost","root","");
$db = mysql_select_db("rugbydb", $connection);
mysql_set_charset('utf8',$connection);
$new = "SELECT * FROM news order by id desc limit 3";
$result = mysql_query($new);
        echo"<table border='1'>";
       
while($row = mysql_fetch_array($result)){
            echo "<tr>";
            echo "<td>". $row['Title']."</td>";
            echo "</tr>";

}
    echo"</table>";

mysql_close($connection);
        ?>
</div>
