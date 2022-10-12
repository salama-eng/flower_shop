<?php
$servername = "localhost";
$username = "root";
$password = "amat1234";
$dbname = "flower_shop";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$gift_sql = "SELECT * FROM products WHERE category_id=2";
$gift_result = $conn->query($gift_sql);

$wedding_sql = "SELECT * FROM products WHERE category_id=1";
$wedding_result = $conn->query($wedding_sql);
if(isset($_POST['logout']))
{
  unset($_COOKIE['user']); 
}

// $conn->close();
?>