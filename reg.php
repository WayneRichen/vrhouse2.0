<?php
session_start();
include("db.php");
$conn->close();
?>
<!---註冊頁面--->
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/99f3b63dd0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="reg.css">
    <title>VR租屋網｜登入</title>
</head>
<body>
    <div class="container" id="top">        
        <div>
            <ul class="navbari">
                <li><a class="logoimg" href="index.php"><img src="images/logo.png" class="logo" alt="logo"></a></li>
                <li><a href="/contactus.php">聯絡我們</a></li>
                <li><a href="/faq.php">常見問題</a></li>
                <li class="log"><a href="login.php">登入</a></li>
            </ul>
        </div>
        <div class="reg">
            <center><font size="7">註冊帳號</font></center><br>
            <form action="reg1.php" enctype="multipart/form-data" method="post">
                帳號：<input name="acc" id="acc"><br><br>
                密碼：<input name="pass" id="pass"><br><br>
                姓名：<input name="name" id="name"><br><br>
                信箱：<input name="mail" id="mail"><br><br>
                手機：<input name="phone" id="phone"><br><br>
                公益出租人身分證明：<input type="file" name="public_benefit_lessor"><br><br>
                政府認證合法租屋證明：<input type="file" name="rental_certi"><br><br>
                <input type="submit" value="註冊">
            </form>
        </div>
    </div>
</body>
</html>