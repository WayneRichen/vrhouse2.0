<?php
session_start();
include("../db.php");
$id = $_GET['id'];
try {
    $sql = "DELETE FROM `landlord_review` WHERE `landlord_review`.`id` = $id;";
    $conn->query($sql);
    echo "<script>alert('刪除成功');window.location.replace('/admin/comment.php');</script>";
} catch (Exception $e) {
    echo "<script>alert(\"刪除失敗 " . $e->getMessage() . "\");window.location.replace('/admin/comment.php');</script>";
}
$conn->close();