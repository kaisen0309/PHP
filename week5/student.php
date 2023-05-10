<?php
//week5

session_start();
if ($_SESSION["login"] == "Yes") {
} else {
    header("Location:error.php");
}
?>

<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php
    echo "login success<br/><br/>";
    echo "Hello Student !!";
    echo "<br/><br/>";

    echo "你沒有權限看校長跟老師的page<br/>";
    ?>
    <br /><br />
    Principal <br />
    Teacher
    <br /><br />
    <a href="logout.php">Logout</a>
</body>

</html>
