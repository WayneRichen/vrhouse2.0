<?php
session_start();
include("db.php");
$acc = $_SESSION["logacc"];
$landlord = $_POST["landlord"];
$com = $_POST["com"];
try {
    $sql = "INSERT INTO `landlord_review` (`user`, `landlord`, `comment`) VALUES ('$acc', '$landlord', '$com');";
    $conn->query($sql);
    echo "<script>alert('新增成功');window.location.replace('landlord.php');</script>";
} catch (Exception $e) {
    echo "<script>alert(\"新增失敗 " . $e->getMessage() . "\");window.location.replace('landlord.php');</script>";
}
$conn->close();