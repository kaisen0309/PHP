<?php
//week5
?>
<html>

<head>

</head>

<body>
    <form method="post" action="check.php">
        <font size="5">
            id:<input type="text" name="id"><br />
            password:<input type="password" name="pwd"><br />
            <br />

            <input type="submit"><input type="reset"><br />
            <br /><br /><br /><br />
            <table border="2">
                <tr>
                    <td width="30%">身分</td>
                    <td width="30%">帳號</td>
                    <td width="30%">密碼</td>
                </tr>
                <tr>
                    <td>校長 </td>
                    <td>principal</td>
                    <td>pwdprincipal</td>
                </tr>
                <tr>
                    <td>老師</td>
                    <td>teacher</td>
                    <td>pwdteacher</td>
                </tr>
                <tr>
                    <td>學生</td>
                    <td>student</td>
                    <td>pwdstudent</td>
                </tr>
            </table>

        </font>
    </form>
</body>

</html>
