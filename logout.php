<!---登出判斷--->
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rent";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$conn->close();
session_destroy();
echo "<script>alert('登出成功')</script>";
header("Refresh:1;url=index.php");
?>