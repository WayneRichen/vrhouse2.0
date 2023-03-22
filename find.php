<?php
session_start();
include("db.php");
?>
<!---搜尋進入後，搜尋結果頁面--->
<!DOCTYPE html>
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://kit.fontawesome.com/99f3b63dd0.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="find.css">
            <title>VR租屋網</title>
        </head>
        <body>
<?php
$queryField = $_GET["queryField"];
$keyWord = $_GET["queryString"];
$queryWash = $_GET["wash"];
$queryRef = $_GET["ref"];
$queryDrink = $_GET["drink"];
$queryTel = $_GET["tel"];
$queryAir = $_GET["air"];
$queryGas = $_GET["gas"];
$queryBed = $_GET["bed"];
$queryCloth = $_GET["cloth"];
$querySofa = $_GET["sofa"];
$queryTach = $_GET["tach"];
$queryPet = $_GET["pet"];
$queryWater = $_GET["water"];
$queryLight = $_GET["light"];
$queryInter = $_GET["inter"];

$searchField = "";

if (!strcmp($queryField, "hh_name"))
{
    $searchField = "hh_name";
}
else if (!strcmp($queryField, "hh_where"))
{
    $searchField = "hh_where";
}
else if (!strcmp($queryField, "hh_address"))
{
    $searchField = "hh_address";
}
else if (!strcmp($queryField, "hh_com"))
{
    $searchField = "hh_com";
}
else if (!strcmp($queryField, "hh_price"))
{
    $searchField = "hh_price";
}
else
{
    // nothing to do 
}

//$sql = "SELECT * from `housee` where `$searchField` like '%$keyWord%'";   //-------------------------------------------------------------------------
$sql ="";
$selectAndFrom="SELECT * from `housee`";
$where=" where ";
$condition ="";
$sql = $selectAndFrom;


if ($searchField != null && $searchField != "")
{
    if($condition == null && $condition == "")
    {
        $condition = $condition." `$searchField` like '%$keyWord%' ";
    }
    else 
    {
        $condition = $condition." AND `$searchField` like '%$keyWord%' ";
    }
}

if ($queryWash != null && $queryWash != "")
{
    $queryWash="wash";
    if($condition == null && $condition == "")
    {
        $condition = $condition." `$queryWash` = 'true' ";
    }
    else 
    {
        $condition = $condition." AND `$queryWash` = 'true' ";
    }
}
if ($queryRef != null && $queryRef != "")
{
    $queryRef="ref";
    if($condition == null && $condition == "")
    {
        $condition = $condition." `$queryRef` = 'true' ";
    }
    else 
    {
        $condition = $condition." AND `$queryRef` = 'true' ";
    }
}
if ($queryDrink != null && $queryDrink != "")
{
    $queryDrink="drink";
    if($condition == null && $condition == "")
    {
        $condition = $condition." `$queryDrink` = 'true' ";
    }
    else 
    {
        $condition = $condition." AND `$queryDrink` = 'true' ";
    }
}
if ($queryTel != null && $queryTel != "")
{
    $queryTel="tel";
    if($condition == null && $condition == "")
    {
        $condition = $condition." `$queryTel` = 'true' ";
    }
    else 
    {
        $condition = $condition." AND `$queryTel` = 'true' ";
    }
}
if ($queryAir != null && $queryAir != "")
{
    $queryAir="air";
    if($condition == null && $condition == "")
    {
        $condition = $condition." `$queryAir` = 'true' ";
    }
    else 
    {
        $condition = $condition." AND `$queryAir` = 'true' ";
    }
}
if ($queryGas != null && $queryGas != "")
{
    $queryGas="gas";
    if($condition == null && $condition == "")
    {
        $condition = $condition." `$queryGas` = 'true' ";
    }
    else 
    {
        $condition = $condition." AND `$queryGas` = 'true' ";
    }
}
if ($queryBed != null && $queryBed != "")
{
    $queryBed="bed";
    if($condition == null && $condition == "")
    {
        $condition = $condition." `$queryBed` = 'true' ";
    }
    else 
    {
        $condition = $condition." AND `$queryBed` = 'true' ";
    }
}
if ($queryCloth != null && $queryCloth != "")
{
    $queryCloth="cloth";
    if($condition == null && $condition == "")
    {
        $condition = $condition." `$queryCloth` = 'true' ";
    }
    else 
    {
        $condition = $condition." AND `$queryCloth` = 'true' ";
    }
}
if ($querySofa != null && $querySofa != "")
{
    $querySofa="sofa";
    if($condition == null && $condition == "")
    {
        $condition = $condition." `$querySofa` = 'true' ";
    }
    else 
    {
        $condition = $condition." AND `$querySofa` = 'true' ";
    }
}
if ($queryTach != null && $queryTach != "")
{
    $queryTach="tach";
    if($condition == null && $condition == "")
    {
        $condition = $condition." `$queryTach` = 'true' ";
    }
    else 
    {
        $condition = $condition." AND `$queryTach` = 'true' ";
    }
}
if ($queryPet != null && $queryPet != "")
{
    $queryPet="pet";
    if($condition == null && $condition == "")
    {
        $condition = $condition." `$queryPet` = 'true' ";
    }
    else 
    {
        $condition = $condition." AND `$queryPet` = 'true' ";
    }
}
if ($queryWater != null && $queryWater != "")
{
    $queryWater="water";
    if($condition == null && $condition == "")
    {
        $condition = $condition." `$queryWater` = 'true' ";
    }
    else 
    {
        $condition = $condition." AND `$queryWater` = 'true' ";
    }
}
if ($queryLight != null && $queryLight != "")
{
    $queryLight="light";
    if($condition == null && $condition == "")
    {
        $condition = $condition." `$queryLight` = 'true' ";
    }
    else 
    {
        $condition = $condition." AND `$queryLight` = 'true' ";
    }
}
if ($queryInter != null && $queryInter != "")
{
    $queryInter="inter";
    if($condition == null && $condition == "")
    {
        $condition = $condition." `$queryInter` = 'true' ";
    }
    else 
    {
        $condition = $condition." AND `$queryInter` = 'true' ";
    }
}

if ($condition != null && $condition != "")
{
    $sql = $sql.$where.$condition;
}


    try
    {
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
        else
        {
            print "搜尋不到任何符合條件房屋";
        }

    }
    catch (PDOException $pdoe)
    {
        print "查詢錯誤：".$pdoe->getMessage();
    }
?>
            <div class="container" id="top">        
                <div>
                    <ul class="navbari">
                        <li><a class="logoimg" href="index.php"><img src="images/logo.png" class="logo" alt="logo"></a></li>
                        <li><a href="">聯絡我們</a></li>
                        <li><a href="">常見問題</a></li>
                    </ul>
                </div>
                <div class="inside">                    
                    <div class="rightres">
                        <div class="toptop">
                            <h2 class="re">搜尋結果</h2>
                        </div>
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
                                <a href="housepage.php?id=<?php echo $row["hh_id"]?>"class="in">觀看房屋</a></a>
                            </div>
                        </div>
                       <?php
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    </html>