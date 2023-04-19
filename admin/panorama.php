<?php
session_start();
include("../db.php");
$sql = "SELECT * FROM `housee`;";
$result = $conn->query($sql);
$houses = [];
while($row = $result->fetch_assoc()) {
    $houses[] = $row;
}
$conn->close();
?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/99f3b63dd0.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="panorama.css">
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
                    <h2>編輯環景圖</h2>
                    <div class="house">
                        <div class="house-id">
                            id
                        </div>
                        <div class="house-name">
                            房屋名稱
                        </div>
                        <div class="house-panorama">
                            環景圖
                        </div>
                        <div class="house-panorama">
                            VR 程式碼
                        </div>
                    </div>
                    <form class="form" action="/admin/panorama-update.php" method="POST">
                        <?php foreach ($houses as $house): ?>
                        <div class="house">
                            <div class="house-id">
                                <a href="/housepage.php?id=<?=$house['hh_id']?>"><?=$house['hh_id']?></a>
                            </div>
                            <div class="house-name">
                                <a href="/housepage.php?id=<?=$house['hh_id']?>"><?=$house['hh_name']?></a>
                            </div>
                            <div class="house-panorama">
                                <?php if ($house['panorama_images']): ?>
                                <?php $house['panorama_images'] = json_decode($house['panorama_images'], true); ?>
                                <?php foreach ($house['panorama_images'] as $image): ?>
                                <div class="panorama">
                                    <a href="/<?=$image?>" target="_blank"><img src="/<?=$image?>" /></a>
                                </div>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                            <div class="house-panorama">
                                <textarea name="<?=$house['hh_id']?>-vr_script"><?=$house['vr_script']?></textarea>
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