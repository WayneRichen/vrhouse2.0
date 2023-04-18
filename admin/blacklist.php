<?php
session_start();
include("../db.php");
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
                    <h2>管理租屋黑市</h2>
                    <h2><a href="/admin/write.php">新增文章</a></h2>
                    <div class="comments">
                    <?php foreach ($posts as $post): ?>
                    <div class="comment">
                        <div class="title-edit">
                            <span class="title"><?=$post['title']?></span>
                            <div class="edit">
                                <a href="/admin/write.php?id=<?=$post['id']?>">🖊️編輯</a> <a href="/admin/delete-post.php?id=<?=$post['id']?>">❌刪除</a>
                            </div>
                        </div>
                        <?=date('Y-m-d H:i', strtotime($post['created_at']))?>
                        <p style="white-space: pre-wrap; line-height: 1.6;"><?=$post['content']?></p>
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