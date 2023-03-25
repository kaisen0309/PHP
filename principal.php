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
    echo "Hello Principal !!";
    echo "<br/><br/>";

    echo "你有權限看老師的page<br/>你沒有權限看學生的page<br/>";
    ?>
    <br /><br />
    <a href="teacher.php">Teacher</a><br />
    Student
    <br /><br />
    <a href="logout.php">Logout</a>
</body>

</html>