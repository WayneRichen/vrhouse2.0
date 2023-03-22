<!---更改密碼判斷頁面--->
<?php
session_start();
$opa=$_POST["opa"];
$newpa=$_POST["newpa"];
$newpaa=$_POST["newpaa"];
$acc=$_SESSION["logacc"];
$pass=$_SESSION["logpas"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rent";

$conn = new mysqli($servername, $username, $password, $dbname);

echo '舊密碼' .$opa;
echo '新密碼' .$newpa;
echo '新密碼確認' .$newpaa ;
echo '帳號' .$acc ;
echo '登入時密碼' .$pass ;

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if ($opa==$pass && $newpa==$newpaa) {
  
  echo "成功更改密碼";
 } else {
   echo "舊密碼輸入錯誤" . $conn->error;
 }
$sql = "UPDATE `user` SET `pass`='$newpa' WHERE acc='$acc'";//判斷式無法成功
$result = $conn->query($sql);

$conn->close();


 ?>