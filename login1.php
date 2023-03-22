<!---登入判斷頁面--->
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rent";

$acc=$_POST["acc"];
$pass=$_POST["pass"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `user` WHERE `acc` = '$acc';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  if($row["pass"]==$pass){
    echo "<script>alert('登入成功，點擊確認跳轉回首頁')</script>";
    $_SESSION["loginC"] = "yes";
    $_SESSION["logname"]= $row["name"]  ;
    $_SESSION["logacc"]= $row["acc"]  ;
    $_SESSION["logpas"]= $row["pass"]  ;
    header("Refresh:1;url=index.php");
    }else{
    echo "<script>alert('密碼錯誤，請重新登入')</script>";
    header("Refresh:1;url=login.php");
    }
} else {
  echo "<script>alert('此帳號還未被註冊，請註冊完再登入，謝謝')</script>";
  header("Refresh:1;url=reg.php");
}
$conn->close();
?>