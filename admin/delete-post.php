<?php
session_start();
include("../db.php");
$id = $_GET['id'];
try {
    $sql = "DELETE FROM `blacklist` WHERE `blacklist`.`id` = $id;";
    $conn->query($sql);
    echo "<script>alert('刪除成功');window.location.replace('/admin/blacklist.php');</script>";
} catch (Exception $e) {
    echo "<script>alert(\"刪除失敗 " . $e->getMessage() . "\");window.location.replace('/admin/blacklist.php');</script>";
}
$conn->close();