<?php
session_start();
include("../db.php");
$post = ['id' => null, 'title' => null, 'content' => null];
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `blacklist` WHERE id = $id;";
    $result = $conn->query($sql);
    $post = $result->fetch_assoc();
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
                </ul>
            </div>
            <div class="main">
                <div class="comments">
                    <h2>新增文章</h2>
                    <form method="post" action="/admin/write-input.php">
                        <?php if ($post['id']): ?>
                        <input type="hidden" name="id" value="<?=$post['id']?>"/>
                        <?php endif; ?>
                        標題
                        <input type="text" name="title" class="add" value="<?=$post['title']?>"/><br>
                        內容
                        <textarea rows="10" class="com" name="content"><?=$post['content']?></textarea>
                        <div class="sub-button">
                            <button type="submit" class="sub">送出</button>
                        </div>
                    </form>
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