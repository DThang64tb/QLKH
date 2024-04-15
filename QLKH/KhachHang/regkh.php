<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<?php
require 'C:\xampp\htdocs\QLKH\DB\connect.php';
if(isset($_POST['btn-regkh'])){
    $MaKH = $_POST['MaKH'];
    $TenKH = $_POST['TenKH'];
    $GT = $_POST['GT'];
    $DiaChi = $_POST['DiaChi'];
    $SoDienThoai = $_POST['SoDienThoai'];
    $Email = $_POST['Email'];
    if(!empty($MaKH) && !empty($TenKH)&& !empty($GT)
    && !empty($DiaChi)&& !empty($SoDienThoai)&& !empty($Email)){
        $sql = "INSERT INTO `KhachHang` (`MaKH`, `TenKH`,
         `GT`,`DiaChi`,`SoDienThoai`,`Email` ) VALUE('$MaKH', '$TenKH',
         '$GT','$DiaChi','$SoDienThoai','$Email')";

         if($conn->query($sql)===TRUE){
            echo " lưu dữ liệu thành công";
            header("Location: lietkekh.php");
            exit();
         }else{
            echo "Lỗi {$sql}".$conn->error; 
         }
    }else
    echo " Nhập đủ thông tin";
}
?>
<br>
<a href="khachhang.php" class="btn btn-info">Quay lại trang thêm khách hàng</a>
<a href="lietkekh.php" class="btn btn-danger"> Quay lại trang liệt kê</a>