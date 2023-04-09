<?php
session_start();
include("../db.php");
$data = $_POST;
try {
    foreach ($data as $key => $value) {
        $acc = explode('-', $key)[0];
        $field = explode('-', $key)[1];
        if ($value) {
            $sql = "UPDATE `user` SET `is_$field` = 1 WHERE `user`.`acc` = '$acc';";
        } else {
            $sql = "UPDATE `user` SET `is_$field` = 0 WHERE `user`.`acc` = '$acc';";
        }
        $conn->query($sql);
    }
    echo "<script>alert('已儲存');window.location.replace('/admin/index.php');</script>";
} catch (Exception $e) {
    echo "<script>alert(\"儲存失敗 " . $e->getMessage() . "\");window.location.replace('/admin/index.php');</script>";
}
$conn->close();