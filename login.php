<!---登入頁面--->
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
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/99f3b63dd0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.css">
    <title>VR租屋網｜登入</title>
</head>
<body>
    <div class="container" id="top">        
        <div>
            <ul class="navbari">
                <li><a class="logoimg" href="index.php"><img src="images/logo.png" class="logo" alt="logo"></a></li>
                <li><a href="">聯絡我們</a></li>
                <li><a href="">常見問題</a></li>
                <li class="reg"><a href="reg.php" >註冊</a></li>
            </ul>
        </div>
        <div class="logg">
            <center><font size="7">登入帳號</font></center><br>
            <form action="login1.php" method="post">
                帳號：<input name="acc" id="acc"><br><br><!---acc登入帳號--->
                密碼：<input name="pass" id="pass"><br><br><!---pass登入密碼--->
                <input type="submit" value="登入">
            </form>
        </div>
    </div>
</body>
</html>