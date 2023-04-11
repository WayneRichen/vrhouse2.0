<?php
session_start();
include("db.php");

$acc=$_SESSION["logacc"];
$sql = "SELECT * FROM `housee` WHERE `hh_who`='$acc';";
?>
<!---我的房屋頁面，房東查看房屋的地方--->
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/99f3b63dd0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="house.css">
    <title>VR租屋網｜我的房屋</title>
</head>
<body>

		<tbody>
    <div class="container" id="top">        
        <div>
            <ul class="navbari">
                <li><a class="logoimg" href="index.php"><img src="images/logo.png" class="logo" alt="logo"></a></li>
                <li><a href="">聯絡我們</a></li>
                <li><a href="">常見問題</a></li>
                <li class="reg"><a href="reg.php" >登出</a></li>
            </ul>
        </div>
        <div class="myhouse">
            <center><font size="7">我的房屋</font></center><br>
        </div><br>
        <div class="gridcontainer">
        <?php
                        $result = $conn->query($sql);
                        while($row = $result->fetch_assoc())
                        {

                        ?>
                        <div class="house1">
                            <div class="housecon">
                                <img src="<?php echo $row["hh_img"]?>" class="houserec" alt="房屋範例1">
                                <h5 class="desc"><?php echo $row["hh_name"]?></h5>
                                <h5 class="desc"><?php echo $row["hh_where"]?>/<?php echo $row["hh_address"]?></h5>
                                <h4 class="price">每月<?php echo $row["hh_price"]?></h4>
                                <a href="myhome.php?id=<?php echo $row["hh_id"]?>" class="in">觀看房屋</a></a>
                                <a href="edit1.php?id=<?php echo $row["hh_id"]?>" class="del">編輯房屋</a></a>
                                <a href="delhome.php?id=<?php echo $row["hh_id"]?>" class="del">下架房屋</a></a>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
            
        </div>
    </div>
</body>
</html>