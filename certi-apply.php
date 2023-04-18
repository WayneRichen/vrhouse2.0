<?php
session_start();
include("db.php");
$acc=$_SESSION["logacc"];
$public_benefit_lessor=isset($_FILES['public_benefit_lessor'])?$_FILES['public_benefit_lessor']:null;
$rental_certi=isset($_FILES['rental_certi'])?$_FILES['rental_certi']:null;

if ($public_benefit_lessor && $public_benefit_lessor['error'] === UPLOAD_ERR_OK){
  echo '檔案名稱: ' . $public_benefit_lessor['name'] . '<br/>';
  echo '檔案類型: ' . $public_benefit_lessor['type'] . '<br/>';
  echo '檔案大小: ' . ($public_benefit_lessor['size'] / 1024) . ' KB<br/>';
  echo '暫存名稱: ' . $public_benefit_lessor['tmp_name'] . '<br/>';
  $tempFile = $public_benefit_lessor['tmp_name'];
  $public_benefit_lessor_dest = 'images/' . $public_benefit_lessor['name'];

  # 將檔案移至指定位置
  move_uploaded_file($tempFile, $public_benefit_lessor_dest);
  try {
    $sql="UPDATE `user` SET `public_benefit_lessor` = '$public_benefit_lessor_dest' WHERE `user`.`acc` = '$acc';";
    $conn->query($sql);
  } catch (Exception $e) {
    echo "<script>alert(\"儲存失敗 " . $e->getMessage() . "\");window.location.replace('/my.php');</script>";
  }
} elseif (isset($public_benefit_lessor['error'])) {
  echo '錯誤代碼：' . $public_benefit_lessor['error'] . '<br/>';
}


if ($rental_certi && $rental_certi['error'] === UPLOAD_ERR_OK){
  echo '檔案名稱: ' . $rental_certi['name'] . '<br/>';
  echo '檔案類型: ' . $rental_certi['type'] . '<br/>';
  echo '檔案大小: ' . ($rental_certi['size'] / 1024) . ' KB<br/>';
  echo '暫存名稱: ' . $rental_certi['tmp_name'] . '<br/>';
  $tempFile = $rental_certi['tmp_name'];
  $rental_certi_dest = 'images/' . $rental_certi['name'];

  # 將檔案移至指定位置
  move_uploaded_file($tempFile, $rental_certi_dest);
  try {
    $sql="UPDATE `user` SET `rental_certi` = '$rental_certi_dest' WHERE `user`.`acc` = '$acc';";
    $conn->query($sql);
  } catch (Exception $e) {
    echo "<script>alert(\"儲存失敗 " . $e->getMessage() . "\");window.location.replace('/my.php');</script>";
  }
} elseif (isset($rental_certi['error'])) {
  echo '錯誤代碼：' . $rental_certi['error'] . '<br/>';
}
$conn->close();
echo "<script>alert('上傳成功');window.location.replace('/my.php');</script>";