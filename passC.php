<?php
session_start();
$opa=$_POST["opa"];
$newpa=$_POST["newpa"];
$newpaa=$_POST["newpaa"];
$acc=$_SESSION["logacc"];
$pass=$_SESSION["logpas"];

include("db.php");

echo '舊密碼' .$opa;
echo '新密碼' .$newpa;
echo '新密碼確認' .$newpaa ;
echo '帳號' .$acc ;
echo '登入時密碼' .$pass ;

if ($opa==$pass && $newpa==$newpaa) {
  
  echo "成功更改密碼";
} else {
  echo "舊密碼輸入錯誤" . $conn->error;
}
$sql = "UPDATE `user` SET `pass`='$newpa' WHERE acc='$acc'";//判斷式無法成功
$result = $conn->query($sql);

$conn->close();


?>
<!---更改密碼判斷頁面--->