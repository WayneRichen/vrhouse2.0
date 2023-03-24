<?php
session_start();
include("db.php");
// <!---登入判斷頁面--->

$acc=$_POST["acc"];
$pass=$_POST["pass"];

$sql = "SELECT * FROM `user` WHERE `acc` = '$acc';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  if ($row["pass"]==$pass) {
    $_SESSION["loginC"] = "yes";
    $_SESSION["logname"]= $row["name"];
    $_SESSION["logacc"]= $row["acc"];
    $_SESSION["logpas"]= $row["pass"];
    echo "<script>alert('登入成功，點擊確認跳轉回首頁');window.location.replace('index.php');</script>";
  } else {
    echo "<script>alert('密碼錯誤，請重新登入');window.location.replace('login.php');</script>";
  }
} else {
  echo "<script>alert('此帳號還未被註冊，請註冊完再登入，謝謝');window.location.replace('reg.php');</script>";
}
$conn->close();
?>