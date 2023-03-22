<?php
session_start();
include("db.php");
$conn->close();
error_reporting(0);
?>
<!---上架房屋頁面--->
<!---點擊上傳與預約後，跳出框框顯示聯絡我們的資料(電話/信箱等)，來與我們取得聯繫並拍攝--->
<?php
    if($_SESSION["loginC"] == "yes"){
    echo '        
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
            <li><a href="">'.$_SESSION["logname"].'先生你好</a></li>
            <li><a href="my.php">個人資料</a></li>
            <li><a href="upload.php">我要SHOW房</a></li>
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
            地址：<input name="add" placeholder="輸入地址" class="add"><br><br>   
            社區名稱：<input name="com" placeholder="輸入社區名稱 如：太子嶺東大街" class="com"><br><br>
            價格：<input name="pri" placeholder="輸入金額" class="pri">元/每月<br><br>  
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
            上傳圖片：<input type="file" name="file"><br><br>  
                <input type="submit" value="上傳與預約" class="sub">
            </form>
            </form>
        </div>
    </div>
    </body>
    </html>';
      }else{
        echo '
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
                        <li><a class="logoimg" href="index.html"><img src="images/logo.png" class="logo" alt="logo"></a></li>
                        <li><a href="">聯絡我們</a></li>
                        <li><a href="">常見問題</a></li>
                        <li><a href="#exampletop">VR看房範例</a></li>
                        <li><a href="#rec">為您推薦</a></li>
                        <li class="log"><a href="login.php" >登入</a></li>
                        <li class="reg"><a href="reg.php" >註冊</a></li>
                    </ul>
                </div>
                <div class="serch">
                    <div class="choose">
                        <h1 style="color:white ;"><b>家的溫暖，值得你挑選</b></h1>
                        <form method="post" name="choose" class="pick">
                            <select class="select">
                                <optgroup label="台中市" name="city">
                                    <option>清水區</option>
                                    <option>南屯區</option>
                                    <option>烏日區</option>
                                </optgroup>
                            </select>
                                <input type="text" placeholder="輸入社區名，地區或是縣市" class="input" name="input">
                                <input type="submit" class="submit" value="搜尋">                   
                        </form>
                    </div>
                </div>
                
                <div class="rec" id="rec">            
                    <h2 style="text-align: center;padding-top: 20px;">為你推薦</h2>
                    <div class="house">
                        <img src="images/houseex1.jpg" class="houserec" alt="房屋範例1">
                        <h5 class="desc">台中市/南屯區/永春南路50巷5號</h5>
                        <h4 class="price">5800元/每月</h4>
                    </div>
                    <div class="house">
                        <img src="images/houseex2.jpg" class="houserec" alt="房屋範例2">
                        <h5 class="desc">台中市/南屯區/永春南路50巷5號</h5>
                        <h4 class="price">5800元/每月</h4>
                    </div>
                </div>
                <div class="exampletop" id="exampletop">
                    <h3>往下滑動來使用VR看房範例功能</h3>
                </div>
                <iframe class="vr" width="100%" height="640" frameborder="0" allow="xr-spatial-tracking; gyroscope; accelerometer" allowfullscreen scrolling="no" src="https://kuula.co/share/collection/79Zxb?logo=0&info=0&fs=1&vr=1&sd=1&initload=0&thumbs=1"></iframe>
                <div class="examplebottom" >
                    <h3>點擊上圖播放來觀看VR範例影片/使用ESC來取消觀看</h3>
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
        </html>';
      }
?>