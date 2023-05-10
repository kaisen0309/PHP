<?php
//0504
?>
<?php

$sID = $_GET['sID'];
$link = @mysqli_connect('localhost', 'root', '', 'php');
mysqli_set_charset($link, "utf8");

$SQL = "DELETE FROM student WHERE sID='$sID'";

if (mysqli_query($link, $SQL)) {
    header("Location:index.php");
}
?>