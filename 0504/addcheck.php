<?php
//0504
?>
<meta charset='utf-8'>

<?php
$sName = $_POST["sName"];
$sEmail = $_POST["sEmail"];
$sAddress = $_POST["sAddress"];
//echo $sName . $sEmail . $sAddress;

$link = @mysqli_connect('localhost', 'root', '', 'php');
mysqli_set_charset($link, "utf8");
$SQL = "INSERT INTO student(sName, sEmail, sAddress) VALUES('$sName', '$sEmail', '$sAddress')";

if (mysqli_query($link, $SQL)) {
    header("Location:index.php");
}
?>