<?php
//week5 
?>

<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    非法進入</br>
    網頁將在三秒後跳離或是</br>
    <a href="account.php">click here</a>

    <?php
    header("Refresh:3;url=account.php");
    ?>
</body>


</html>