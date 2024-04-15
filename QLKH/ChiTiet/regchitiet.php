<?php
require 'C:\xampp\htdocs\QLKH\DB\connect.php';

if (isset($_POST['btn-regchitiet'])) {
    $MaCT = $_POST['MaCT'];
    $MaHD = $_POST['MaHD'];
    $MaPM = $_POST['MaPM'];
    $SoLuong = $_POST['SoLuong'];
    $TongTien = $_POST['TongTien'];

    if (!empty($MaCT) && !empty($MaHD) && !empty($MaPM) && !empty($SoLuong)) {
        $sql = "INSERT INTO `ChiTiet` (`MaCT`, `MaHD`, `MaPM`, `SoLuong`, `TongTien`) 
        VALUES ('$MaCT', '$MaHD', '$MaPM', '$SoLuong', '$TongTien')";

        if ($conn->query($sql) === TRUE) {
            echo "Lưu dữ liệu thành công";
        } else {
            echo "Lỗi: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Nhập đủ thông tin";
    }
}

$conn->close();
?>
