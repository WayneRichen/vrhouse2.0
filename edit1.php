<?php
session_start();
include("db.php");
$acc=$_SESSION["logacc"];
$id = $_GET["id"];
$sql = "SELECT * FROM `housee` WHERE `hh_id`=$id";
?>
<!---編輯房屋頁面--->
<!---點擊上傳與預約後，跳出框框顯示聯絡我們的資料(電話/信箱等)，來與我們取得聯繫並拍攝--->
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
            <li><a href="">先生你好</a></li>
            <li><a href="my.php">個人資料</a></li>
            <li><a href="upload.php">我要SHOW房</a></li>
            <li class="log"><a href="logout.php">登出</a></li>                      
        </ul>
        </div>
        <?php
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc())
                        {
                        ?>
        <div class="up">
            <font size="7">房屋資訊填寫</font><br><hr><br>
            <form action="edit.php?id=<?php echo $row["hh_id"]?>" method="post" enctype="multipart/form-data">
            房屋名稱：<input name="name" value="<?php echo $row["hh_name"]?>" class="add"><br> 
            市區：<select name="where" class="where">
                    <optgroup label="台中市">
                        <option>清水區</option>
                        <option>南屯區</option>
                        <option>烏日區</option>
                    </optgroup>                
                </select>                
            地址：<input name="add" value="<?php echo $row["hh_address"]?>" class="add"><br><br>   
            社區名稱：<input name="com" value="<?php echo $row["hh_com"]?>" class="com"><br><br>
            價格：<input name="pri" value="<?php echo $row["hh_price"]?>" class="pri">元/每月<br><br>  
            <span class="rent">租金包含：</span>
                <input type="checkbox"  name="water">水費
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
            上傳圖片：<input type="file" name="file"><br><br>  
                <input type="submit" value="上傳與預約" class="sub">
            </form>
            </form>
        </div>
    </div>
    <?php
                        }
                        ?>
    </body>
    </html>
      
        