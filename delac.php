<!---註銷帳號--->
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rent";

$acc=$_SESSION["logacc"];


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$sql = "DELETE FROM user WHERE `user`.`acc` = '$acc'";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {    
    session_destroy();
    echo "<script>alert('帳號已成功註銷，跳轉至首頁')</script>";
    header("Refresh:1;url=index.php");
  } else {
    echo "<script>alert('註銷失敗，請重新操作')</script>";
    header("Refresh:1;url=my.php");
  }
  $conn->close();

?>