<?php
session_start();
include("db.php");

$acc = $_SESSION["logacc"];
$id = $_GET["id"];
$sql = "SELECT * FROM `housee` WHERE `hh_id`= $id";
?>
<!---觀看我的房屋版面--->
<!DOCTYPE html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/99f3b63dd0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="housepage.css">
    <title>VR租屋網｜上傳</title>
    </head>
    <body>
    <div class="container" id="top">        
        <div>
            <ul class="navbari">
                <li><a class="logoimg" href="index.php"><img src="images/logo.png" class="logo" alt="logo"></a></li>
                <li><a href="/contactus.php">聯絡我們</a></li>
                <li><a href="/faq.php">常見問題</a></li>
                <li class="reg"><a href="reg.php" >登出</a></li>
            </ul>
        </div>

                       
            
        </div>
    </div>
    <?php
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc())
                        {
                        ?>
        <div class="imfor">
            <font size="7"><?php echo $row["hh_name"]?></font>
            <font size="4">地址:<?php echo $row["hh_where"]?>/<?php echo $row["hh_address"]?></font><br><hr><br>
            <img src="images/houseex1.jpg" class="houserec" alt="房屋範例1">
            <div class="equ">
                <font size="7">房屋資訊</font><br><hr>
                <div class="leftequ">
                    54645646456水電房屋%%%%%%%%%%
                </div>
                <div class="rightprice">
                    <span class="price">每月<?php echo $row["hh_price"]?></span>
                </div>
                <div class="exampletop" id="exampletop">
                    <h3>往下滑動來使用VR看房</h3><a href="" target="_blank" class="blank">點此來用新分頁觀賞</a>
                </div>
                <iframe class="vr" width="100%" height="640" frameborder="0" allow="xr-spatial-tracking; gyroscope; accelerometer" allowfullscreen scrolling="no" src="https://kuula.co/share/collection/79Zxb?logo=0&info=0&fs=1&vr=1&sd=1&initload=0&thumbs=1"></iframe>
                <div class="examplebottom" >
                    <h3>點擊上圖播放來觀看VR範例影片/使用ESC來取消觀看</h3>
                </div>
            </div>
        </div>
        <?php
                        }
                        ?>
        <div class="com">
            <span class="in">房東聯絡資訊</span>
        </div>
        <?php $sql = "SELECT * FROM `user` WHERE `acc`='$acc'"; ?>
        <?php
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc())
                        {
                        ?>
        <div class="com2">
            <ul class="phone">
                <li>手機：<?php echo $row["phone"]?></li>
                <li>信箱：<?php echo $row["mail"]?></li>
                <li>房東姓名：<?php echo $row["name"]?></li>
            </ul>
        </div>
        <?php
                        }
                        ?>
    </div>
    </body>
    </html>