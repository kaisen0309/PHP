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
    echo "Hello Teacher !!";
    echo "<br/><br/>";

    echo "你有權限看學生的page<br/>你沒有權限看校長的page<br/>";
    ?>
    <br /><br />
    Principal<br />
    <a href="student.php">Student</a>
    <br /><br />
    <a href="logout.php">Logout</a>
</body>

</html>