<?php
session_start();
include("db.php");
// <!---個人資料頁面--->
if ($_SESSION["loginC"] != "yes") {
    header('Location:index.php');
}
$sql = 'SELECT * FROM `user` WHERE `user`.`acc` = "' . $_SESSION["logacc"] . '"';
$result = $conn->query($sql);
$user = $result->fetch_assoc();
$conn->close();
?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/99f3b63dd0.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="my.css">
<title>VR租屋網｜個人資料</title>
</head>
<body>
<div class="container" id="top">        
    <div>
        <ul class="navbari">
        <li><a class="logoimg" href="index.php"><img src="images/logo.png" class="logo" alt="logo"></a></li>
        <li><a href=""><?= $_SESSION["logname"] ?>先生你好</a></li>
        <li><a href="my.php">個人資料</a></li>
        <li><a href="upload.php">我要SHOW房</a></li>
        <li><a href="landlord.php">房東評價系統</a></li>
        <li><a href="blacklist.php">租屋黑市專區</a></li>
        <li><a href="/contactus.php">聯絡我們</a></li>
        <li><a href="/faq.php">常見問題</a></li>
        <li class="log"><a href="logout.php">登出</a></li>                      
    </ul>
    </div>
    <div class="my">
        <font size="7">個人資料</font><br><hr><br>
        <div>
            <div class="change">
                <form action="pass.php"><input type="submit" class="cpass" value="更改密碼"></form>
            </div>
            <div class="house">
                <form action="house.php"><input type="submit" class="myh" value="我的房屋"></form>
            </div>
            <div class="delac">
                <form action="delac.php"><input type="submit" class="del" value="註銷帳號"></form>
            </div>
        </div>
        <form action="certi-apply.php" method="POST" enctype="multipart/form-data" >
            <?php if ($user['is_public_benefit_lessor'] == 0): ?>
            上傳公益出租人身分證明：<input type="file" name="public_benefit_lessor"><br><br>
            <?php endif; ?>
            <?php if ($user['is_rental_certi'] == 0): ?>
            上傳政府認證合法租屋證明：<input type="file" name="rental_certi"><br><br>
            <?php endif; ?>
            <?php if ($user['is_public_benefit_lessor'] == 0 || $user['is_rental_certi'] == 0): ?>
            <button type="submit">送出</button>
            <?php endif; ?>
        </form>
        <?php if ($user['is_public_benefit_lessor'] || $user['is_rental_certi']): ?>
            <font size="5">我的標章</font><br>
            <?php if ($user['is_public_benefit_lessor']):?><span class="public_benefit_lessor_tag">公益出租人</span><?php endif;?>
            <?php if ($user['is_rental_certi']):?><span class="rental_certi_tag">政府認證</span><?php endif;?>
        <?php endif; ?>
    </div>
</div>
</body>
</html>