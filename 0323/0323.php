<html>
<head>
<meta charset="utf-8">
<title>
0323 
</title>
</head>
<body>
<form action ="0323check.php" method="post" enctype="multipart/form-data">
<?php
IF(isset($_COOKIE["myID"])){
    echo $_COOKIE["myID"]."HELLO";//登入成功再重新重整會顯示
    //setcookie("myID","",time()-100);
    echo "<br/>";
    echo "請輸入id:<input type = 'text'name='id' value='".$_COOKIE["myID"]."'><br/>";
    echo "輸入password:<input type = 'password' name='pwd' value='".$_COOKIE["myPWD"]."'><br/>";
}else{ //一開始跑這裡
    echo "<input type = 'text'name='id'><br/>";
    echo "<input type = 'password'name='pwd'><br/>";
}
?>


<?php

//echo time(); //時間戳記
echo "<br/>";
date_default_timezone_set('Asia/Taipei');
echo date("Y-M-d H:i:s",time());
echo "<br/>";
echo mktime(0,0,0,4,1,2023); //2023/4/1的時間戳記
echo "<br/>";
echo $nm = strtotime("next month");
echo "<br/>";
echo date("Y-M-d H:i:s",$nm);
echo "<br/>";
?>

<!-- <form action ="0323check.php" method="post"> -->
<!-- 請輸入id:<input type="text" name="id"></br> -->
<!-- 輸入password:<input type="password" name="pwd"></br> -->
<input type="file" name="myfile" accept=".jpeg"><br/>
<!-- <input type="file" name="myfile2" accept="imege/jpeg"><br/> 儲存第二個檔案-->
<!-- accept 接受哪種檔案 -->
<input type="submit"><input type="reset"><br/>
</form>
</body>

</html>
