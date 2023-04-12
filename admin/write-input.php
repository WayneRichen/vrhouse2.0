<?php
session_start();
include("../db.php");
$data = $_POST;
$title = $_POST['title'];
$content = $_POST['content'];
$category = $_POST['category'];
try {
    if (empty($_POST['id'])) {
        $sql = "INSERT INTO `blacklist` (`id`, `category`, `title`, `content`) VALUES (NULL, '$category', '$title', '$content');";
    } else {
        $id = $_POST['id'];
        $sql = "UPDATE `blacklist` SET `title` = '$title', `category` = '$category', `content` = '$content' WHERE `blacklist`.`id` = $id;";
    }
    $conn->query($sql);
    echo "<script>alert('儲存成功');window.location.replace('/admin/blacklist.php');</script>";
} catch (Exception $e) {
    echo "<script>alert(\"儲存失敗 " . $e->getMessage() . "\");window.location.replace('/admin/blacklist.php');</script>";
}
$conn->close();