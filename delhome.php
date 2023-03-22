<?php
session_start();
include("db.php");
$acc=$_SESSION["logacc"];
$id = $_GET["id"];
echo $id;

$sql = "DELETE FROM housee WHERE `housee`.`hh_id` = '$id'";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {    
  echo "<script>alert('房屋已成功註銷，跳轉至我的房屋');window.location.replace('house.php');</script>";
} else {
  echo "<script>alert('註銷失敗，請重新操作');window.location.replace('my.php');</script>";
}
$conn->close();

?>
<!---下架房屋--->