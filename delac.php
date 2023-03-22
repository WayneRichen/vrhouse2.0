<?php
session_start();
include("db.php");

$acc = $_SESSION["logacc"];
$sql = "DELETE FROM user WHERE `user`.`acc` = '$acc'";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {    
  session_destroy();
  echo "<script>alert('帳號已成功註銷，跳轉至首頁');window.location.replace('index.php');</script>";
} else {
  echo "<script>alert('註銷失敗，請重新操作');window.location.replace('my.php');</script>";
}
$conn->close();

?>
<!---註銷帳號--->