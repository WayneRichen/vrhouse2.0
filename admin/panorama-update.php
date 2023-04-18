<?php
session_start();
include("../db.php");
$data = $_POST;
try {
    foreach ($data as $key => $value) {
        $house_id = explode('-', $key)[0];
        $field = explode('-', $key)[1];
        if ($field == 'vr_script') {
            $sql = "UPDATE `housee` SET `vr_script` = '$value' WHERE `housee`.`hh_id` = $house_id;";
            $conn->query($sql);
        }
    }
    echo "<script>alert('已儲存');window.location.replace('/admin/panorama.php');</script>";
} catch (Exception $e) {
    echo "<script>alert(\"儲存失敗 " . $e->getMessage() . "\");window.location.replace('/admin/panorama.php');</script>";
}
$conn->close();