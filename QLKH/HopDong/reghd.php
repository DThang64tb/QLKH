<?php
require 'C:\xampp\htdocs\QLKH\DB\connect.php';
if(isset($_POST['btn-reghd'])){
    $MAHD = $_POST['MAHD'];
    $MAKH = $_POST['MAKH'];
    $date = $_POST['date'];
    $thoihan = $_POST['thoihan'];
    if(!empty($MAHD) && !empty($MAKH)&& !empty($date)&& !empty($thoihan)){
        $sql = "INSERT INTO `HopDong` (`MAHD`, `MAKH`,`NgayKy`,`ThoiHan`) 
        VALUE('$MAHD', '$MAKH','$date','$thoihan')";
         if($conn->query($sql)===TRUE){
            echo " lưu dữ liệu thành công";
         }else{
            echo "Lỗi {$sql}".$conn->error; 
         }
    }else
    echo " Nhập đủ thông tin";
}
?>