<meta charset="utf-8">

<?php

$id=$_POST["id"];
$pwd=$_POST["pwd"];

$myID="hannah";
$myPWD="nana";

if(($myID==$id)&&($myPWD==$pwd)){
    echo "login success";
    setcookie("myID",$myID);//連結到前頁
    setcookie("myPWD",$myPWD);//連結到前頁
}else{
    echo "login failed";
}

echo "檔案名稱 : ".$_FILES["myfile"]["name"]."<br/>";
echo "暫存檔名 : ".$_FILES["myfile"]["tmp_name"]."<br/>";
echo "檔案尺寸 : ".$_FILES["myfile"]["size"]."<br/>";
echo "檔案種類 : ".$_FILES["myfile"]["type"]."<br/>";

copy($_FILES["myfile"]["tmp_name"],"123.jpg");//放自己要上船的圖片/檔案名稱
unlink($_FILES["myfile"]["tmp_name"]);

?>
