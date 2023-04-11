<?php
//<!---上架房屋頁面--->
//<!---點擊上傳與預約後，跳出框框顯示聯絡我們的資料(電話/信箱等)，來與我們取得聯繫並拍攝--->
session_start();
include("db.php");
$conn->close();
error_reporting(0);
if ($_SESSION["loginC"] != "yes") {
    header('Location:index.php');
}
?>        
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/99f3b63dd0.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="upload.css">
<title>VR租屋網｜上傳</title>
</head>
<body>
<div class="container" id="top">        
    <div>
        <ul class="navbari">
        <li><a class="logoimg" href="index.php"><img src="images/logo.png" class="logo" alt="logo"></a></li>
        <li><a href=""><?=$_SESSION["logname"]?>'先生你好</a></li>
        <li><a href="my.php">個人資料</a></li>
        <li><a href="upload.php">我要SHOW房</a></li>
        <li><a href="landlord.php">房東評價系統</a></li>
        <li><a href="blacklist.php">租屋黑市專區</a></li>
        <li class="log"><a href="logout.php">登出</a></li>
    </ul>
    </div>
    <div class="up">
        <font size="7">房屋資訊填寫</font><br><hr><br>
        <form action="work.php" method="post" enctype="multipart/form-data">
        房屋名稱：<input name="name" placeholder="輸入名字" class="add"><br> 
        市區：<select name="where" class="where">
                <optgroup label="台中市">
                    <option>清水區</option>
                    <option>南屯區</option>
                    <option>烏日區</option>
                </optgroup>                
            </select>                
        地址：<input name="add" placeholder="輸入地址" class="add"><br>
        社區名稱：<input name="com" placeholder="輸入社區名稱 如：太子嶺東大街" class="com"><br>
        價格：<input name="pri" placeholder="輸入金額" class="pri">元/每月<br>
        押金：<input type="number" name="deposit" placeholder="輸入數字" class="add" />個月<br>
        最短租期：<input type="number" name="min_rent" placeholder="輸入數字" class="add" />個月<br>
        坪數：<input type="number" name="square" placeholder="輸入數字" class="add" />坪<br><br>
        <span class="rent">租金包含：</span>
            <input type="checkbox" name="water">水費
            <input type="checkbox" name="light">電費
            <input type="checkbox" name="inter">網路費<br><br>
        <span class="equ">提供設備：</span>
            <input type="checkbox" name="wash" value="true">洗衣機
            <input type="checkbox" name="ref" value="true">冰箱
            <input type="checkbox" name="drink" value="true">飲水機
            <input type="checkbox" name="tel" value="true">電視
            <input type="checkbox" name="air" value="true">冷氣<br><br>
            <input type="checkbox" name="gas" value="true">瓦斯
            <input type="checkbox" name="bed" value="true">床墊
            <input type="checkbox" name="cloth" value="true">衣櫃
            <input type="checkbox" name="sofa" value="true">沙發   
            <input type="checkbox" name="tach" value="true">桌椅
            <input type="checkbox" name="pet" value="true">寵物<br><br>
            <label for="parking">車位種類</label>
            <select name="parking" id="parking" class="where">
                <option value="無車位">無車位</option>
                <option value="機械式">機械式</option>
                <option value="平面式">平面式</option>
            </select><br>
        上傳圖片：<input type="file" name="file"><br><br>
        特色描述：<br><textarea class="com" name="description" rows="4" cols="50"></textarea><br>
        嵌入 Google 地圖：<br><textarea class="com" name="google_map" rows="4" cols="50"></textarea><br>
        聯絡方式：<input type="text" name="contact" placeholder="Line 或電話號碼" class="add" /><br>
            <input type="checkbox" name="is_social_housing" value="true">該房屋為社會住宅<br><br>
            <input type="submit" value="上傳與預約" class="sub"><br><br>
        </form>
    </div>
</div>
</body>
</html>