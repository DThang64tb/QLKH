<?php
$sMaKH= $_GET['sMaKH'];
require 'C:\xampp\htdocs\QLKH\DB\connect.php';

// Bước 1: Cập nhật trường Lop trong bảng SinhVien thành NULL
$update_sql = "UPDATE HopDong SET MaKH = NULL WHERE MaKH = '$sMaKH'";
mysqli_query($conn, $update_sql);

// Bước 2: Xóa bản ghi từ bảng Lop
$xoa_sql = "DELETE FROM KhachHang WHERE MaKH = '$sMaKH'";
mysqli_query($conn, $xoa_sql);

echo '<h1>Xóa thành công</h1>';
header("Location: lietkekh.php");
?>
