<?php
//week5

session_start();

$principalID = "principal";
$principalPWD = "pwdprincipal";

$teacherID = "teacher";
$teacherPWD = "pwdteacher";

$studentID = "student";
$studentPWD = "pwdstudent";


$id = $_POST["id"];
$pwd = $_POST["pwd"];

if (($principalID == $id) && ($principalPWD == $pwd)) {
    $_SESSION["login"] = "Yes";
    header("Location:principal.php");
} else if (($teacherID == $id) && ($teacherPWD == $pwd)) {
    $_SESSION["login"] = "Yes";
    header("Location:teacher.php");
} else if (($studentID == $id) && ($studentPWD == $pwd)) {
    $_SESSION["login"] = "Yes";
    header("Location:student.php");
} else {
    $_SESSION["login"] = "No";
    header("Location:fail.php");
}
?>
//