<?php
$servername = "mariadb";
$username = "root";
$password = "";
$dbname = "rent";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}