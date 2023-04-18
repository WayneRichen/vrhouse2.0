<?php
session_start();
include("db.php");

$acc=$_SESSION["logacc"];
$id = $_GET["id"];

$sql = "SELECT * FROM `housee` WHERE `hh_id`=$id";
?>
<!---搜尋結果房屋觀看版面--->
<!DOCTYPE html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
                <li><a href="">聯絡我們</a></li>
                <li><a href="">常見問題</a></li>
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
            <font size="4">地址:<?php echo $row["hh_where"]?>/<?php echo $row["hh_address"]?></font><br>
            <font size="4">社區名稱:<?php echo $row["hh_com"]?></font><br><hr><br>
            <img src="<?php echo $row["hh_img"]?>" class="houserec" alt="<?php echo $row["hh_name"]?>">
            <div class="equ">
                <font size="7">房屋資訊</font><br><hr>
                <div class="leftequ">
                    坪數：<?php echo $row["square"]?>坪<br>
                    租金包含：<?php echo $row["water"] == 'true' ? '水費 ' : ''?>
                    <?php echo $row["light"] == 'true' ? '電費費 ' : ''?>
                    <?php echo $row["inter"] == 'true' ? '網路費 ' : ''?>
                    <br>
                    提供設備：<?php echo $row["wash"] == 'true' ? '洗衣機 ' : ''?>
                    <?php echo $row["ref"] == 'true' ? '冰箱 ' : ''?>
                    <?php echo $row["drink"] == 'true' ? '飲水機 ' : ''?>
                    <?php echo $row["tel"] == 'true' ? '電視 ' : ''?>
                    <?php echo $row["air"] == 'true' ? '冷氣 ' : ''?>
                    <?php echo $row["gas"] == 'true' ? '瓦斯 ' : ''?>
                    <?php echo $row["bed"] == 'true' ? '床墊 ' : ''?>
                    <?php echo $row["cloth"] == 'true' ? '衣櫃 ' : ''?>
                    <?php echo $row["sofa"] == 'true' ? '沙發 ' : ''?>
                    <?php echo $row["tach"] == 'true' ? '桌椅 ' : ''?>
                    <br>
                    車位類型：<?php echo $row["parking"] ?>
                    <br>
                    允許寵物：<?php echo $row["pet"] == 'true' ? '是' : '否'?>
                    <br>
                    是否為社會住宅：<?php echo $row["is_social_housing"] == 1 ? '是' : '否'?>
                    <br><hr>
                    <?php echo $row["description"] ?>
                </div>
                <div class="rightprice">
                    <span>押金<?php echo $row["deposit"]?>個月</span><br>
                    <span>最短租期<?php echo $row["min_rent"]?>個月</span><br>
                    <span class="price">租金每月<?php echo $row["hh_price"]?></span>
                </div>
                <?php if ($row['vr_script']): ?>
                <div class="exampletop" id="exampletop">
                    <h3>往下滑動來使用VR看房</h3><a href="" target="_blank" class="blank">點此來用新分頁觀賞</a>
                </div>
                <?=$row['vr_script']?>
                <div class="examplebottom" >
                    <h3>點擊上圖播放來觀看VR範例影片/使用ESC來取消觀看</h3>
                </div>
                <?php endif; ?>
                <?php echo $row["google_map"]?>
            </div>
        </div>

        <div class="com">
            <span class="in">房東聯絡資訊</span>
        </div>
       <?php
       $userSql = "SELECT * FROM `user` WHERE `acc` = '".$row["hh_who"]."'";
       $userResult = $conn->query($userSql);
       $rowUser = $userResult->fetch_assoc()
       ?>
        
        <div class="com2">
            <ul class="phone">
                <li>手機：<?php echo $rowUser["phone"]?></li>
                <li>信箱：<?php echo $rowUser["mail"]?></li>
                <li>房東姓名：<?php echo $rowUser["name"]?></li>
                <li>聯絡方式：<?php echo $row["contact"]?></li>
            </ul>
        </div>
        <?php
                        }
                        ?>

    </div>
    </body>
    </html>