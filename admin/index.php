<?php
session_start();
include("../db.php");
$sql = "SELECT * FROM `user` WHERE `public_benefit_lessor` IS NOT NULL OR `rental_certi` IS NOT NULL;";
$result = $conn->query($sql);
$users = [];
while($row = $result->fetch_assoc()) {
    $users[] = $row;
}
$conn->close();
?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/99f3b63dd0.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="index.css">
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
                    <h2>房東審核</h2>
                    <form class="form" action="/admin/review.php" method="POST">
                        <?php foreach ($users as $user): ?>
                        <div class="user">
                            <div class="user-info">
                                申請人姓名：<?=$user['name']?><br>
                                申請人 Email：<?=$user['mail']?><br>
                                申請人手機：<?=$user['phone']?><br>
                            </div>
                            <div class="user-certi">
                                公益出租人證明
                                <div class="certi">
                                    <a href="/<?=$user['public_benefit_lessor']?>" target="_blank"><img src="/<?=$user['public_benefit_lessor']?>" /></a>
                                </div>
                            </div>
                            <div class="user-certi">
                                <input type="hidden" name="<?=$user['acc']?>-public_benefit_lessor">
                                <input type="checkbox" id="<?=$user['acc']?>-public_benefit_lessor" name="<?=$user['acc']?>-public_benefit_lessor" <?= $user['is_public_benefit_lessor']?'checked':'' ?>>
                                <label for="<?=$user['acc']?>-public_benefit_lessor">允取成為公益出租人</label>
                            </div>
                            <div class="user-certi">
                                政府認證合格租屋證明
                                <div class="certi">
                                    <a href="/<?=$user['rental_certi']?>" target="_blank"><img src="/<?=$user['rental_certi']?>" /></a>
                                </div>
                            </div>
                            <div class="user-certi">
                                <input type="hidden" name="<?=$user['acc']?>-rental_certi" >
                                <input type="checkbox" id="<?=$user['acc']?>-rental_certi" name="<?=$user['acc']?>-rental_certi" <?= $user['is_rental_certi']?'checked':'' ?>>
                                <label for="<?=$user['acc']?>-rental_certi">允取成為政府認證合格租屋</label>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <div class="sub-button">
                            <button type="submit" class="sub">儲存</button>
                        </div>
                    </form>
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