<?php
//week2
?>

<html>
    <meta charset="utf-8">
    <head>
        <title>
            高大資管烤肉報名表單
        </title>
        
        
    </head>

    <body bgcolor="#84c7f1">
        <p>
            <center>
                <font size="6">
                    <center>
                        <img src="barbecue.png" width="50">
                        <B><u>高大資管烤肉</u></B>
                        <img src="grilling.png" width="50">
                        <br/><br/>
                    </center>
                </font>

                <div style="border-width: 3px; border-style:solid   ;  width: 500px ;height: 190px ;padding: 5px ;text-align: center">
                    <b>2023資管系烤肉</b></br>
                    時間:&nbsp2023/03/01</br>
                    地點:&nbsp高雄大學<br>
                    報名費:&nbsp100/人<br>
                    攜帶物品:&nbsp學生證、水、個人藥物等等<br>
                    注意事項:&nbsp禁止玩火<br/>
                    總召:&nbsp ABC<br>
                    聯絡方式:&nbsp 0912345678<br>
                    Email:&nbsp a1103399@mail.nuk.edu.tw
                </div>
                <br/><br/>

                <font size="5">
                    <center>  
                        <B><u>活動流程</u></B>
                        <br/>
                    </center>
                </font>

                <table border="2">
                    <tr><td width="45%">時間</td><td width="45%">流程</td><td width="40%">備註</td></tr>
                    <tr><td>17:00 ~ 18:00 </td><td>集合</td><td>無</td></tr>
                    <tr><td>18:00 ~ 19:00</td><td>烤肉</td><td>無</td></tr>
                    <tr><td>19:00 ~ 20:00</td><td>遊戲</td><td>無</td></tr>
                    <tr><td>20:00 ~ 20:30</td><td>收拾</td><td>無</td></tr>
                </table>

                <br/><br/><br/>
                <font size="5">
                    <center>  
                        <B><u>以下為報名表單</u></B>
                    </center>
                </font>
            </center>

        </p>

        <br/>
        <HR>
        <br/>

        <p>
            <center>
                <font size="6">
                    <center>
                        <B><u>高大資管烤肉報名表單</u></B>
                        <img src="lets-go.png" width="50">
                        <br/>
                    </center>
                </font>
                
            </center>
        </p>

        <form action="1.php"; method="post">
            <center><font size="4">
                姓名:&nbsp<input type="text" style="font-size:18px" name="id" placeholder="ex: 王小明" required><br><br>
                學號:&nbsp<input type="text" style="font-size:18px" name="id" placeholder="ex: A1103399" required><br><br>
                系級:&nbsp<br>
                <input type="radio" name="grade" required>112<br/>
                <input type="radio" name="grade" required>113<br/>
                <input type="radio" name="grade" required>114<br/>
                <input type="radio" name="grade" required>115<br/><br/>

                電話:&nbsp<input type="tel" style="font-size:18px" name="tel" required><br><br>
                Email:&nbsp<input type="email" style="font-size:18px" name="email" required><br><br>
                生日:&nbsp<input type="date" style="font-size:18px" name="date" required><br><br>
                緊急聯絡人/關係:&nbsp<input type="text" style="font-size:18px" name="id" placeholder="ex: 王大明/父子" required><br><br>
                緊急聯絡人電話:&nbsp<input type="tel" style="font-size:18px" name="tel" required><br><br>
                備註:<br><textarea name="textarea" id="textarea" cols="40" rows="5"  placeholder="ex: 對食物過敏等等，非必填" ></textarea><br><br>


                <input type="submit">
                <input type="reset">
            </font></center>
        </form>

    </body>
</html>
