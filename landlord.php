<?php
session_start();
include("db.php");
$sql = "SELECT * FROM `user`;";
$result = $conn->query($sql);
$landlords = [];
while($row = $result->fetch_assoc()) {
    $landlords[] = $row;
}
$sql = "SELECT `user`.`name` as `user`, `user`.`phone`, `landlord`.`name` as `landlord`, `landlord_review`.`comment`, `landlord_review`.`created_at` FROM `landlord_review` JOIN `user` ON `user`.`acc` = `landlord_review`.`user` JOIN `user` AS `landlord` on `landlord`.`acc` = `landlord_review`.`landlord`;";
$result = $conn->query($sql);
$comments = [];
while($row = $result->fetch_assoc()) {
    $comments[] = $row;
}
$conn->close();
?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/99f3b63dd0.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="landlord.css">
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
                    <li><a href="landlord.php">房東評價系統</a></li>
                    <li><a href="blacklist.php">租屋黑市專區</a></li>
                    <li class="log"><a href="login.php" >登入</a></li>
                    <li class="reg"><a href="reg.php" >註冊</a></li>
                    </ul>
                <?php endif; ?>
            </div>
            <div class="main">
                <div class="comments">
                    <h2>房東評價系統</h2>
                    <?php foreach ($comments as $comment): ?>
                    <div class="comment">
                        姓名：<?=$comment['user']?><br>
                        電話：<?=$comment['phone']?><br>
                        評價房東：<?=$comment['landlord']?><br>
                        評價內容：<p style="white-space: pre-wrap; line-height: 1.6;"><?=$comment['comment']?></p>
                        時間：<?=$comment['created_at']?><br>
                    </div>
                    <?php endforeach; ?>
                    <?php if (!empty($_SESSION["logname"])): ?>
                    <form class="form" action="/comment.php" method="POST">
                        <label for="landlord">選擇房東：</label>
                        <select id="landlord" name="landlord">
                            <?php foreach ($landlords as $landlord): ?>
                            <option value="<?=$landlord['acc']?>"><?=$landlord['name']?></option>
                            <?php endforeach; ?>
                        </select>
                        <textarea id="com" name="com" class="com" rows="5"></textarea>
                        <div class="sub-button">
                            <button type="submit" class="sub">送出</button>
                        </div>
                    </form>
                    <?php endif; ?>
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