<html>

<head>

</head>

<body>
    <?php
    error_reporting(0);
    session_start();
    if ($_SESSION["login"] != null) {
        session_destroy();
    }
    ?>
    <form method="post" action="check.php">

        <?php
        if (isset($_COOKIE["adminID"])) {
            setcookie("adminID", $adminID, time() + (60 * 60 * 24 * 7));
            setcookie("adminPWD", $adminPWD, time() + (60 * 60 * 24 * 7));
            echo "<br/>";
            echo "請輸入id:<input type = 'text'name='id' value='" . $_COOKIE["adminID"] . "'><br/>";
            echo "輸入password:<input type = 'password' name='pwd' value='" . $_COOKIE["adminPWD"] . "'><br/>";
            echo "<input type='submit'>";
            echo "<input type='reset'><br />";
        } else if (isset($_COOKIE["userID"])) {
            setcookie("userID", $userID, time() + (60 * 60 * 24 * 7));
            setcookie("userPWD", $userPWD, time() + (60 * 60 * 24 * 7));
            echo "<br/>";
            echo "請輸入id:<input type = 'text'name='id' value='" . $_COOKIE["userID"] . "'><br/>";
            echo "輸入password:<input type = 'password' name='pwd' value='" . $_COOKIE["userPWD"] . "'><br/>";
            echo "<input type='submit'>";
            echo "<input type='reset'><br />";
        } else {
            echo "<font size='5'>請輸入id:<input type = 'text'name='id'> </font><br/>";
            echo "<font size='5'>輸入password:<input type = 'password'name='pwd'> </font><br/><br>";
            echo "<input type='submit'>";
            echo "<input type='reset'><br />";
        }
        ?>

    </form>
</body>

</html>