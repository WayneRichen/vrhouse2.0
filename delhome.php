<!---下架房屋--->
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rent";

$acc=$_SESSION["logacc"];
$id = $_GET["id"];
echo $id;


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$sql = "DELETE FROM housee WHERE `housee`.`hh_id` = '$id'";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {    
    echo "<script>alert('房屋已成功註銷，跳轉至我的房屋')</script>";
    header("Refresh:1;url=house.php");
  } else {
    echo "<script>alert('註銷失敗，請重新操作')</script>";
    header("Refresh:1;url=my.php");
  }
  $conn->close();

?>