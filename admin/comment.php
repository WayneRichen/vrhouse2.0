<?php
session_start();
include("../db.php");
$sql = "SELECT `landlord_review`.`id`, `user`.`name` as `user`, `user`.`phone`, `landlord`.`name` as `landlord`, `landlord_review`.`comment`, `landlord_review`.`created_at` FROM `landlord_review` JOIN `user` ON `user`.`acc` = `landlord_review`.`user` JOIN `user` AS `landlord` on `landlord`.`acc` = `landlord_review`.`landlord` ORDER BY id DESC;";
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
        <link rel="stylesheet" href="comment.css">
        <title>VR租屋網</title>
    </head>
    <body>
        <div class="container" id="top">
            <div>
                <ul class="navbari">
                    <li><a class="logoimg" href="/index.php"><img src="../images/logo.png" class="logo" alt="logo"></a></li>
                    <li><a href=""><?=$_SESSION["logname"]?>先生你好</a></li>
                    <li><a href="/admin/index.php">房東審核</a></li>
                    <li><a href="/admin/comment.php">管理房東評價</a></li>
                    <li><a href="/admin/blacklist.php">管理租屋黑市</a></li>
                    <li><a href="/admin/panorama.php">編輯環景圖</a></li>
                </ul>
            </div>
            <div class="main">
                <div class="comments">
                    <h2>管理房東評價</h2>
                    <?php foreach ($comments as $comment): ?>
                    <div class="comment">
                        <div class="content-delete">
                            <div class="content">
                                姓名：<?=$comment['user']?><br>
                                電話：<?=$comment['phone']?><br>
                                評價房東：<?=$comment['landlord']?><br>
                            </div>
                            <div class="delete">
                                <a href="/admin/delete-comment.php?id=<?=$comment['id']?>">❌刪除</a>
                            </div>
                        </div>
                        評價內容：<p style="white-space: pre-wrap; line-height: 1.6;"><?=$comment['comment']?></p>
                        時間：<?=$comment['created_at']?><br>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="footer">
                <ul class="aboutus">
                    <li><h4>關於租房網：</h4></li>
                    <li><a href="/contactus.php">聯絡我們</a></li>
                    <li><a href="/faq.php">常見問題</a></li>
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