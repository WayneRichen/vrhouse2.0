<!---註冊判斷頁面--->
<?php
session_start();
$acc=$_POST["acc"];
$pass=$_POST["pass"];
$name=$_POST["name"];
$mail=$_POST["mail"];
$phone=$_POST["phone"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rent";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    $sql="INSERT INTO `user` (`acc`, `pass`, `name`, `mail`, `phone`) VALUES ('$acc', '$pass', '$name', '$mail', '$phone')";
}

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('註冊成功，點擊確認跳轉回首頁')</script>";
  header("Refresh:1;url=index.php");
} else {
  echo "帳號已有人使用，請重新註冊一次" . $sql . "<br>" . $conn->error;
  header("Refresh:1;url=reg.php");
}

$conn->close();
?>

