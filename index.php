<?php
session_start();
include("db.php");
$conn->close();
error_reporting(0);
?>
<!---首頁版面--->
<!---為你推薦希望能夠隨機抽取資料庫房屋資訊來顯示--->
<?php
      if($_SESSION["loginC"] == "yes"){
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
                      <li><a class="logoimg" href="index.php"><img src="images/logo.png" class="logo" alt="logo"></a></li>
                      <li><a href="">'.$_SESSION["logname"].'先生你好</a></li>
                      <li><a href="my.php">個人資料</a></li>
                      <li><a href="upload.php">我要SHOW房</a></li>
                      <li><a href="landlord.php">房東評價系統</a></li>
                      <li><a href="blacklist.php">租屋黑市專區</a></li>
                      <li class="log"><a href="logout.php" >登出</a></li>                      
                  </ul>
              </div>
              <div class="serch">
                  <div class="choose">
                      <h1 style="color:white ;"><b>家的溫暖，值得你挑選</b></h1>
                      <form action="find.php" method="get" name="choose" class="pick">
                            <select class="select" name="queryField">
                                <optgroup label="類別" name="city">
                                <option value="hh_name">名稱</option>
                                <option value="hh_where">地區</option>
                                <option value="hh_address">地址</option>
                                <option value="hh_com">社區</option>
                                <option value="hh_price">預算</option>
                                </optgroup>
                            </select>
                            <input type="text" placeholder="輸入社區名，地區或是縣市" class="input" name="queryString">
                            <ul class="where" style="text-align:center;margin-left:30px;display:block;text-align:center;margin-right:30px">
                                <h2 style="color:white;margin-right:340px;">設備：</h2>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox" name="wash">洗衣機</li>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox" name="ref">冰箱</li>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox" name="drink">飲水機</li>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox" name="tel">電視</li>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox" name="air">冷氣</li>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox" name="gas">瓦斯</li>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox" name="bed">床墊</li>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox" name="cloth">衣櫃</li>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox" name="sofa">沙發</li>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox" name="tach">桌椅</li>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox" name="pet">寵物</li>
                            </ul>
                            <br>
                            <br>
                            <br>
                            <ul class="where" style="text-align:center;margin-left:30px;display:block;text-align:center;">
                                <h2 style="color:white;margin-right:320px;">費用包含：</h2>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox" name="water">水費</li>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox" name="light">電費</li>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox" name="inter">網路費</li>
                            </ul>
                            <br>
                            <br>
                            <br>
                            <input type="submit" class="submit" value="搜尋">                                           
                      </form>
                  </div>
              </div>
              <!-- <div class="rec" id="rec">            
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
              </div> -->
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
                        <li><a class="logoimg" href="index.php"><img src="images/logo.png" class="logo" alt="logo"></a></li>
                        <li><a href="">聯絡我們</a></li>
                        <li><a href="">常見問題</a></li>
                        <li><a href="#exampletop">VR看房範例</a></li>
                        <li><a href="#rec">為您推薦</a></li>
                        <li><a href="landlord.php">房東評價系統</a></li>
                        <li><a href="blacklist.php">租屋黑市專區</a></li>
                        <li class="log"><a href="login.php" >登入</a></li>
                        <li class="reg"><a href="reg.php" >註冊</a></li>
                    </ul>
                </div>
                <div class="serch">
                    <div class="choose">
                        <h1 style="color:white ;"><b>家的溫暖，值得你挑選</b></h1>
                        <form action="find.php" method="get" name="choose" class="pick">
                            <select class="select" name="queryField">
                                <optgroup label="類別" name="city">
                                <option value="hh_name">名稱</option>
                                <option value="hh_where">地區</option>
                                <option value="hh_address">地址</option>
                                <option value="hh_com">社區</option>
                                <option value="hh_price">預算</option>
                                </optgroup>
                            </select>
                            <input type="text" placeholder="輸入社區名，地區或是縣市" class="input" name="queryString">
                            <ul class="where" style="text-align:center;margin-left:30px;display:block;text-align:center;margin-right:30px">
                                <h2 style="color:white;margin-right:340px;">設備：</h2>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox">洗衣機</li>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox">冰箱</li>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox">飲水機</li>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox">電視</li>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox">冷氣</li>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox">瓦斯</li>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox">床墊</li>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox">衣櫃</li>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox">沙發</li>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox">桌椅</li>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox">寵物</li>
                            </ul>
                            <br>
                            <br>
                            <br>
                            <ul class="where" style="text-align:center;margin-left:30px;display:block;text-align:center;">
                                <h2 style="color:white;margin-right:320px;">費用包含：</h2>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox">水費</li>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox">電費</li>
                                <li style="list-style-type: none;color:white;float:left;display:inline;"><input type="checkbox">網路費</li>
                            </ul>
                            <br>
                            <br>
                            <br>
                            <input type="submit" class="submit" value="搜尋">                                           
                      </form>
                    </div>
                </div>
                
                <!-- <div class="rec" id="rec">            
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
                </div> -->
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

