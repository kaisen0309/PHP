<?php
//week5

ob_start();
session_start();
if ($_SESSION["login"] == "No") {
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
    echo $_SESSION["login"];
    ?>
    </br>
    網頁將在三秒後跳離或是</br>
    <a href="account.php">click here</a>

    <?php
    header("Refresh:3;url=account.php");
    ?>
</body>


</html>
<?php ob_flush(); ?>
