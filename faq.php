<?php
session_start();
include("db.php");
$conn->close();
?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/99f3b63dd0.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="faq.css">
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
                    <li><a href="/contactus.php">聯絡我們</a></li>
                    <li><a href="/faq.php">常見問題</a></li>
                    <li class="log"><a href="logout.php" >登出</a></li>
                </ul>
                <?php else: ?>
                <ul class="navbari">
                    <li><a class="logoimg" href="index.php"><img src="images/logo.png" class="logo" alt="logo"></a></li>
                    <li><a href="/contactus.php">聯絡我們</a></li>
                    <li><a href="/faq.php">常見問題</a></li>
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
                    <h2>常見問題</h2>
                    <h3>1.如何預約拍攝環景照片</h3>
                    <p>A:上傳完房屋資訊後，請至聯絡我們與我們聯絡，環景照片的部分由我們負責上傳，只需要相約時間拍攝即可<br>
                    若是本人可以親自拍攝環景照片的話，也可以至我的房屋裡上傳照片以利我們後續編輯</p>
                    <h3>2.公益出租人與合法住宅認證文件</h3>
                    <p>A：公益出租人證明可先至 <a href="https://nprent.cpami.gov.tw/nprent/" target="_blank">https://nprent.cpami.gov.tw/nprent/</a> 網站查詢，並截圖上傳。
                        <img src="/images/nprentexample.jpeg" style="max-width: 720px;" /><br>
                        合法住宅認證文件請上傳出租住宅之建築物所有權狀<br>
                        <img src="https://obs.line-scdn.net/0hs8I_mMnbLBd0JjpPLwtTQE5wL3hHSj8UEBB9FDdIciBYFDxFT0YzIVcicCReEmtJGhVlcFQgNyYMEDhHHUcz/w644" style="max-width: 720px;" />
                    </p>
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