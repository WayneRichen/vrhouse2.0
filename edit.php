<?php
session_start();
include("db.php");
$id = $_GET["id"];

$name=$_POST["name"];
$where=$_POST["where"];
$add=$_POST["add"];
$com=$_POST["com"];
$pri=$_POST["pri"];
$deposit=$_POST["deposit"];
$min_rent=$_POST["min_rent"];
$square=$_POST["square"];
$water=!empty($_POST["water"])?'true':'false';
$light=!empty($_POST["light"])?'true':'false';
$inter=!empty($_POST["inter"])?'true':'false';
$wash=!empty($_POST["wash"])?'true':'false';
$ref=!empty($_POST["ref"])?'true':'false';
$drink=!empty($_POST["drink"])?'true':'false';
$tel=!empty($_POST["tel"])?'true':'false';
$air=!empty($_POST["air"])?'true':'false';
$gas=!empty($_POST["gas"])?'true':'false';
$bed=!empty($_POST["bed"])?'true':'false';
$cloth=!empty($_POST["cloth"])?'true':'false';
$sofa=!empty($_POST["sofa"])?'true':'false';
$tach=!empty($_POST["tach"])?'true':'false';
$pet=!empty($_POST["pet"])?'true':'false';
$parking=$_POST["parking"];
$description=$_POST["description"];
$google_map = $_POST['google_map'];
$contact=$_POST["contact"];
$is_social_housing=!empty($_POST["is_social_housing"]) ? 1 : 0;
$file=$_FILES['file'];

if ($file['error'] === UPLOAD_ERR_OK){
    echo '檔案名稱: ' . $file['name'] . '<br/>';
    echo '檔案類型: ' . $file['type'] . '<br/>';
    echo '檔案大小: ' . ($file['size'] / 1024) . ' KB<br/>';
    echo '暫存名稱: ' . $file['tmp_name'] . '<br/>';
  
    # 檢查檔案是否已經存在
    if (file_exists('images/' . $file['name'])){
      echo '檔案已存在。<br/>';
    } else {
      $tempFile = $file['tmp_name'];
      $dest = 'images/' . $file['name'];
  
      # 將檔案移至指定位置
      move_uploaded_file($tempFile, $dest);
    }
} else {
  echo '錯誤代碼：' . $file['error'] . '<br/>';
}

$sql = "UPDATE `housee` SET `hh_name`='$name',`hh_where`='$where',hh_com='$com',hh_address='$add',hh_price='$pri',deposit='$deposit',min_rent='$min_rent',square='$square',water='$water',light='$light',inter='$inter',wash='$wash',ref='$ref',drink='$drink',tel='$tel',air='$air',gas='$gas',bed='$bed',cloth='$cloth',sofa='$sofa',tach='$tach',pet='$pet',parking='$parking',description='$description',google_map='$google_map',contact='$contact',is_social_housing='$is_social_housing',hh_img='$dest' WHERE `housee`.`hh_id` = '$id'";
$result = $conn->query($sql);
if ($conn->query($sql) === TRUE) {    
    echo "<script>alert('房屋已成功更新，跳轉至我的房屋');window.location.replace('house.php');</script>";
  } else {
    echo "<script>alert('更新失敗，請重新操作');window.location.replace('my.php');</script>";
  }
  $conn->close();
  error_reporting(0);

?>
<!---編輯房屋判斷頁面--->
<!---圖片必須上傳 且不可重複同樣圖片--->
<!---點擊上傳與預約後，跳出框框顯示聯絡我們的資料(電話/信箱等)，來與我們取得聯繫並拍攝--->
