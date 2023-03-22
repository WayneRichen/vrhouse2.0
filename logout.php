<?php
session_start();
include("db.php");
$conn->close();
session_destroy();
echo "<script>alert('登出成功');window.location.replace('login.php');</script>";
?>
<!---登出判斷--->