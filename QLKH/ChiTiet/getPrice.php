<?php
require 'C:\xampp\htdocs\QLKH\DB\connect.php';

$MaPM = $_GET['MaPM'];

$sql = "SELECT Gia FROM PhanMem WHERE MaPM = '$MaPM'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['Gia'];
} else {
    echo "0";
}

$conn->close();
?>
