<?php
//0504
?>
<meta charset='utf-8'>
<?php

$link = @mysqli_connect('localhost', 'root', '', 'php');

if (!mysqli_select_db($link, 'php'))
    die("open error<br/>");
//else
//  echo "open success<br/>";

mysqli_set_charset($link, "utf8");
$SQL = 'SELECT * FROM student';

if ($result = mysqli_query($link, $SQL)) {
    echo "<a href='add.php'>new data</a>";
    echo "<table border='1'>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['sID'] . "</td><td>" . $row['sName'] . "</td><td>" . $row['sEmail'] . "</td><td>" . $row['sAddress'] . "</td><td>edit</td><td><a href='delete.php?sID=" . $row['sID'] . "'>delete</a></td>";
        echo "</tr>";
    }
} else {
    echo "search error";
}


mysqli_close($link);
?>