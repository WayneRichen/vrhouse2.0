<?php
session_start();
$acc=$_POST["acc"];
$pass=$_POST["pass"];
$name=$_POST["name"];
$mail=$_POST["mail"];
$phone=$_POST["phone"];
$public_benefit_lessor=$_FILES['public_benefit_lessor'];
$rental_certi=$_FILES['rental_certi'];

if ($public_benefit_lessor['error'] === UPLOAD_ERR_OK){
  echo '檔案名稱: ' . $public_benefit_lessor['name'] . '<br/>';
  echo '檔案類型: ' . $public_benefit_lessor['type'] . '<br/>';
  echo '檔案大小: ' . ($public_benefit_lessor['size'] / 1024) . ' KB<br/>';
  echo '暫存名稱: ' . $public_benefit_lessor['tmp_name'] . '<br/>';
  $tempFile = $public_benefit_lessor['tmp_name'];
  $public_benefit_lessor_dest = 'images/' . $public_benefit_lessor['name'];

  # 將檔案移至指定位置
  move_uploaded_file($tempFile, $public_benefit_lessor_dest);
} else {
  echo '錯誤代碼：' . $public_benefit_lessor['error'] . '<br/>';
}

if ($rental_certi['error'] === UPLOAD_ERR_OK){
  echo '檔案名稱: ' . $rental_certi['name'] . '<br/>';
  echo '檔案類型: ' . $rental_certi['type'] . '<br/>';
  echo '檔案大小: ' . ($rental_certi['size'] / 1024) . ' KB<br/>';
  echo '暫存名稱: ' . $rental_certi['tmp_name'] . '<br/>';
  $tempFile = $rental_certi['tmp_name'];
  $rental_certi_dest = 'images/' . $rental_certi['name'];

  # 將檔案移至指定位置
  move_uploaded_file($tempFile, $rental_certi_dest);
} else {
  echo '錯誤代碼：' . $rental_certi['error'] . '<br/>';
}
include("db.php");
$sql="INSERT INTO `user` (`acc`, `pass`, `name`, `mail`, `phone`, `public_benefit_lessor`, `rental_certi`) VALUES ('$acc', '$pass', '$name', '$mail', '$phone', '$public_benefit_lessor_dest', '$rental_certi_dest')";

try {
  $conn->query($sql);
  $_SESSION["loginC"] = "yes";
  $_SESSION["logname"]= $name;
  $_SESSION["logacc"]= $acc;
  $_SESSION["logpas"]= $pass;
  echo "<script>alert('註冊成功，點擊確認跳轉回首頁');window.location.replace('index.php');</script>";
} catch (Exception $e) {
  echo "<script>alert(\"帳號已有人使用，請重新註冊一次 " . $e->getMessage() . "\");window.location.replace('reg.php');</script>";
}

$conn->close();
?>
<!---註冊判斷頁面--->