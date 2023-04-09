<?php
session_start();
include("db.php");
$sql = "SELECT * FROM `blacklist` ORDER BY id DESC;";
$result = $conn->query($sql);
$posts = [];
while($row = $result->fetch_assoc()) {
    $posts[] = $row;
}
$conn->close();
?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/99f3b63dd0.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="blacklist.css">
        <title>VR租屋網</title>
    </head>
    <body>
        <div class="container" id="top">
            <div>
                <?php if (!empty($_SESSION["logname"])): ?>
                <ul class="navbari">
                    <li><a class="logoimg" href="index.php"><img src="images/logo.png" class="logo" alt="logo"></a></li>
                    <li><a href=""><?=$_SESSION["logname"]?>先生你好</a></li>
                    <li><a href="my.php">個人資料</a></li>
                    <li><a href="upload.php">我要SHOW房</a></li>
                    <li><a href="landlord.php">房東評價系統</a></li>
                    <li><a href="blacklist.php">租屋黑市專區</a></li>
                    <li class="log"><a href="logout.php" >登出</a></li>
                </ul>
                <?php else: ?>
                <ul class="navbari">
                    <li><a class="logoimg" href="index.php"><img src="images/logo.png" class="logo" alt="logo"></a></li>
                    <li><a href="">聯絡我們</a></li>
                    <li><a href="">常見問題</a></li>
                    <li><a href="#exampletop">VR看房範例</a></li>
                    <li><a href="#rec">為您推薦</a></li>
                    <li><a href="landlord.php">房東評價系統</a></li>
                    <li><a href="blacklist.php">租屋黑市專區</a></li>
                    <li class="log"><a href="login.php" >登入</a></li>
                    <li class="reg"><a href="reg.php" >註冊</a></li>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="main">
                <div class="comments">
                    <?php foreach ($posts as $post): ?>
                    <div class="comment">
                        <h2><?=$post['title']?></h2>
                        <?=date('Y-m-d H:i', strtotime($post['created_at']))?>
                        <p><?=$post['content']?><p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="footer">
                <ul class="aboutus">
                    <li><h4>關於租房網：</h4></li>
                    <li>聯絡我們</li>
                    <li>常見問題</li>
                    <li>為你推薦</li>
                    <li><a href="#top">回頂部</a></li>
                </ul>
                <ul class="callme">
                    <li><h4>社群：</h4></li>
                    <li><i style="font-size:24px" class="fab fac">&#xf082;</i></li>
                    <li><i style="font-size:24px" class="fab ig">&#xf16d;</i></li>
                    <li><i style="font-size:24px" class="fab you">&#xf16a;</i></li>
                </ul>
            </div>
        </div>
    </body>
</html>