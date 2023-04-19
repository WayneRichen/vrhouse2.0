<?php
session_start();
include("db.php");
$name=$_POST["name"];
$where=$_POST["where"];
$add=$_POST["add"];
$com=$_POST["com"];
$pri=$_POST["pri"];
$deposit=$_POST["deposit"];
$min_rent=$_POST["min_rent"];
$square=$_POST["square"];
$water=$_POST["water"] ?? null;
$light=$_POST["light"] ?? null;
$inter=$_POST["inter"] ?? null;
$wash=$_POST["wash"] ?? null;
$ref=$_POST["ref"] ?? null;
$drink=$_POST["drink"] ?? null;
$tel=$_POST["tel"] ?? null;
$air=$_POST["air"] ?? null;
$gas=$_POST["gas"] ?? null;
$bed=$_POST["bed"] ?? null;
$cloth=$_POST["cloth"] ?? null;
$sofa=$_POST["sofa"] ?? null;
$tach=$_POST["tach"] ?? null;
$pet=$_POST["pet"] ?? null;
$parking=$_POST["parking"];
$description=$_POST["description"];
$google_map = $_POST['google_map'];
$contact=$_POST["contact"];
$is_social_housing=$_POST["is_social_housing"] ?? null;
$file=$_FILES['file'];
$panorama_images=$_FILES['panorama_images'];

if ($file['error'] === UPLOAD_ERR_OK){
  echo '檔案名稱: ' . $file['name'] . '<br/>';
  echo '檔案類型: ' . $file['type'] . '<br/>';
  echo '檔案大小: ' . ($file['size'] / 1024) . ' KB<br/>';
  echo '暫存名稱: ' . $file['tmp_name'] . '<br/>';

  # 檢查檔案是否已經存在
  if (file_exists('images/' . $file['name'])) {
    echo '檔案已存在。<br/>';
    exit;
  } else {
    $tempFile = $file['tmp_name'];
    $image_dest = 'images/' . $file['name'];

    # 將檔案移至指定位置
    move_uploaded_file($tempFile, $image_dest);
  }
} else {
  echo '錯誤代碼：' . $file['error'] . '<br/>';
  exit;
}

$panorama_images_dest = [];
foreach ($panorama_images['error'] as $key => $error) {
  if ($error === UPLOAD_ERR_OK) {
    # 檢查檔案是否已經存在
    if (file_exists('images/' . $panorama_images['name'][$key])){
      echo '檔案已存在。<br/>';
      exit;
    } else {
      $tempFile = $panorama_images['tmp_name'][$key];
      $dest = 'images/' . $panorama_images['name'][$key];
      $panorama_images_dest[] = $dest;

      # 將檔案移至指定位置
      move_uploaded_file($tempFile, $dest);
    }
  } elseif ($error != UPLOAD_ERR_NO_FILE) {
    echo '錯誤代碼：' . $error . '<br/>';
    exit;
  }
}
$panorama_images_dest = json_encode($panorama_images_dest);

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
if ($is_social_housing==null) { $is_social_housing=0; } else{$is_social_housing=1; }




$who=$_SESSION["logacc"];

$sql = "INSERT INTO `housee`( `hh_name`, `hh_where`, `hh_address`, `hh_com`, `description`, `hh_price`, `water`, `light`, `inter`, `wash`, `ref`, `drink`, `tel`, `air`, `gas`, `bed`, `cloth`, `sofa`, `tach`, `pet`, `parking`, `square`, `deposit`, `min_rent`, `contact`, `is_social_housing`, `hh_img`, `hh_who`, `google_map`, `panorama_images`) VALUES ('$name','$where','$add','$com','$description','$pri','$water','$light','$inter','$wash','$ref','$drink','$tel','$air','$gas','$bed','$cloth','$sofa','$tach','$pet','$parking','$square','$deposit','$min_rent','$contact','$is_social_housing','$image_dest','$who','$google_map','$panorama_images_dest')";

if ($conn->query($sql) === TRUE) {  
  echo "<script>alert('上傳成功，再來請填寫預約拍攝時間');window.location.replace('index.php');</script>";
} else {
  echo "<script>alert('上傳失敗，請重新上傳');window.location.replace('upload.php');</script>";
}

$conn->close();
error_reporting(0);

?>
<!---上傳房屋判斷頁面--->
