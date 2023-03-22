<?php
session_start();
$acc=$_POST["acc"];
$pass=$_POST["pass"];
$name=$_POST["name"];
$mail=$_POST["mail"];
$phone=$_POST["phone"];

include("db.php");
$sql="INSERT INTO `user` (`acc`, `pass`, `name`, `mail`, `phone`) VALUES ('$acc', '$pass', '$name', '$mail', '$phone')";

try {
  $conn->query($sql);
  echo "<script>alert(註冊成功，點擊確認跳轉回首頁');window.location.replace('index.php');</script>";
} catch (Exception $e) {
  echo "<script>alert(\"帳號已有人使用，請重新註冊一次 " . $e->getMessage() . "\");window.location.replace('reg.php');</script>";
}

$conn->close();
?>
<!---註冊判斷頁面--->