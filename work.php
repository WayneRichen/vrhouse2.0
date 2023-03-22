<?php
session_start();
include("db.php");
$name=$_POST["name"];
$where=$_POST["where"];
$add=$_POST["add"];
$com=$_POST["com"];
$pri=$_POST["pri"];
$water=$_POST["water"];
$light=$_POST["light"];
$inter=$_POST["inter"];
$wash=$_POST["wash"];
$ref=$_POST["ref"];
$drink=$_POST["drink"];
$tel=$_POST["tel"];
$air=$_POST["air"];
$gas=$_POST["gas"];
$bed=$_POST["bed"];
$cloth=$_POST["cloth"];
$sofa=$_POST["sofa"];
$tach=$_POST["tach"];
$pet=$_POST["pet"];
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

if ($water==null) { $water='false'; } else{$water='true'; }
if ($light==null) { $light='false'; } else{$light='true'; }
if ($inter==null) { $inter='false'; } else{$inter='true'; }
if ($wash==null) { $wash='false'; } else{$wash='true'; }
if ($ref==null) { $ref='false'; } else{$ref='true'; }
if ($drink==null) { $drink='false'; } else{$drink='true'; }
if ($tel==null) { $tel='false'; } else{$tel='true'; }
if ($air==null) { $air='false'; } else{$air='true'; }
if ($gas==null) { $gas='false'; } else{$gas='true'; }
if ($bed==null) { $bed='false'; } else{$bed='true'; }
if ($cloth==null) { $cloth='false'; } else{$cloth='true'; }
if ($sofa==null) { $sofa='false'; } else{$sofa='true'; }
if ($tach==null) { $tach='false'; } else{$tach='true'; }
if ($pet==null) { $pet='false'; } else{$pet='true'; }




$who=$_SESSION["logacc"];

$sql = "INSERT INTO `housee`( `hh_name`, `hh_where`, `hh_address`, `hh_com`, `hh_price`, `water`, `light`, `inter`, `wash`, `ref`, `drink`, `tel`, `air`, `gas`, `bed`, `cloth`, `sofa`, `tach`, `pet`, `hh_img`, `hh_who`) VALUES ('$name','$where','$add','$com','$pri','$water','$light','$inter','$wash','$ref','$drink','$tel','$air','$gas','$bed','$cloth','$sofa','$tach','$pet','$dest','$who')";

if ($conn->query($sql) === TRUE) {  
  echo "<script>alert('上傳成功，再來請填寫預約拍攝時間');window.location.replace('index.php');</script>";
} else {
  echo "<script>alert('上傳失敗，請重新上傳');window.location.replace('upload.php');</script>";
}

$conn->close();
error_reporting(0);

?>
<!---上傳房屋判斷頁面--->
